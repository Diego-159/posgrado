<?php

namespace App\Http\Controllers\Maestria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaestriaController extends Controller
{
    public function index(){
        return view('maestria.index');
    }
}
