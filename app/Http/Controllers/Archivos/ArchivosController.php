<?php

namespace App\Http\Controllers\Archivos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Archivos\ArchivosRequest;
use App\Models\Archivos\DocumentosMaestria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mpdf\Mpdf;

class ArchivosController extends Controller
{
    public function index(){
        if(Auth::user()->programa() === 'maestria'){
            $documentos = Auth::user()->pais == 1 ? DocumentosMaestria::where('id_user', auth()->user()->id)->first() : null;
        }
        return view('archivos.index', compact('documentos'));
    }

    public function solicitud(){
        $mpdf = new \Mpdf\Mpdf([

            'format' => [216, 280],
            'margin_left' => 20,
            'margin_right' => 20,
            'margin_top' => 25,
            'margin_bottom' => 30,
            'margin_header' => 0,
            'margin_footer' => 0,
            'orientation' => 'P'
        ]);
        $html = view('archivos.solicitud_pdf')->render();
        $mpdf->WriteHTML($html);
        $mpdf->Output("Solicitud.pdf", "I");
        return view('archivos.solicitud_pdf');
    }

    public function store(ArchivosRequest $request){
        $request->validated();
    }
}
