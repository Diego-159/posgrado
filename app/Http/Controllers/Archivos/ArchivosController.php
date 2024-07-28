<?php

namespace App\Http\Controllers\Archivos;

use App\Http\Controllers\Controller;
use App\Models\Archivos\Documentos;
use Illuminate\Http\Request;
use Mpdf\Mpdf;

class ArchivosController extends Controller
{
    public function index(){
        $documentos = Documentos::where('id_user', auth()->user()->id)->first();
        return view('archivos.index', compact('documentos'));
    }

    public function solicitud(){
        $mpdf = new Mpdf([

            'format' => [216, 280],
            'margin_left' => 0,
            'margin_right' => 0,
            'margin_top' => 0,
            'margin_bottom' => 0,
            'margin_header' => 0,
            'margin_footer' => 0,
            'orientation' => 'P'
        ]);
        $html = view('archivos.solicitud_pdf')->render();
        $mpdf->WriteHTML($html);
        $mpdf->Output("Solicitud.pdf", "I");
        return view('archivos.solicitud_pdf');
    }
}
