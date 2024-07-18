<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Paises\Paises;

class UserController extends Controller
{
    public function store(Request $request){
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => '1',
            'id_pais' => $request->pais,
        ]);
        return redirect()->route('login');
    }

    public function verify(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            $user = Auth::user();
            session(['user' => $user]);
            return redirect()->route('home');
        }else{
            return redirect()->route('login');
        }
    }

    public function edit( $id){
        if($id != session('user')->id){
            Auth::logout();
            return redirect()->route('login');
        }
        return view('users.edit', ['user' => User::find($id), 'paises' => Paises::all()]);
    }

    public function exit(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function update(Request $request, $id){
        if($id != session('user')->id){
            Auth::logout();
            return redirect()->route('login');
        }
        $user = User::find($id);
        if($request->password != null){
            $user->password = bcrypt($request->password);
        }
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'id_pais' => $request->pais,
        ]);
        if($request->email != $user->email){
            $user->email_verified_at = null;
            //Mandar correo de verificación
        }
        return redirect()->route('home');
    }
}
