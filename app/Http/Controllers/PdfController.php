<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PdfController extends Controller
{
    public function todo() 
    {
        $data = DB::table('modelo3')->get();
        $view =  \View::make('pdf.all', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');

        $pdf->loadHTML($view)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');

        return $pdf->stream('all');
    }

    public function preg2() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta2')->get();
        $view =  \View::make('pdf.preg2', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg2');
    }

    public function preg3() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta3')->get();
        $view =  \View::make('pdf.preg3', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg3');
    }

    public function preg5() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta5')->get();
        $view =  \View::make('pdf.preg5', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg5');
    }

	public function preg6() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta6')->get();
        $view =  \View::make('pdf.preg6', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg6');
    }

    public function preg7() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta7')->get();
        $view =  \View::make('pdf.preg7', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg7');
    }

    public function preg8() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta8')->get();
        $view =  \View::make('pdf.preg8', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg8');
    }

    public function preg9() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta9')->get();
        $view =  \View::make('pdf.preg9', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg9');
    }

    public function preg10() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta10')->get();
        $view =  \View::make('pdf.preg10', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg10');
    }

    public function preg11() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta11')->get();
        $view =  \View::make('pdf.preg11', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg11');
    }

    public function preg12() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta12')->get();
        $view =  \View::make('pdf.preg12', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg12');
    }

    public function preg13() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta13')->get();
        $view =  \View::make('pdf.preg13', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg13');
    }

    public function preg14() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta14')->get();
        $view =  \View::make('pdf.preg14', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg14');
    }

    public function preg15() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta15')->get();
        $view =  \View::make('pdf.preg15', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg15');
    }

    public function preg16() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta16')->get();
        $view =  \View::make('pdf.preg16', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg16');
    }

    public function preg17() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta17')->get();
        $view =  \View::make('pdf.preg17', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg17');
    }

    public function preg18() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta18')->get();
        $view =  \View::make('pdf.preg18', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg18');
    }

    public function preg19() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta19')->get();
        $view =  \View::make('pdf.preg19', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg19');
    }

    public function preg20() 
    {
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta20')->get();
        $view =  \View::make('pdf.preg20', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('preg20');
    }
}
