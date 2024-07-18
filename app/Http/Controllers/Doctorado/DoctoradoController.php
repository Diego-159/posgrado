<?php

namespace App\Http\Controllers\Doctorado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctoradoController extends Controller
{
    public function index(){
        return view('doctorado.index');
    }
}
