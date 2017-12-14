<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\MetodoCongruencialMixto;

class modelo3Controller extends Controller
{

    public function index(){
    	
    }
    public function store(Request $request){

    	$request->pregunta6 = $request->pregunta61*12 + $request->pregunta62;

    	$request->pregunta7 = $request->pregunta71*12 + $request->pregunta72 + $request->pregunta72/30;


    	$request->pregunta11 = $request->pregunta111*24 + $request->pregunta112 + $request->pregunta113/60;

    	$request->pregunta12 = $request->pregunta121 + $request->pregunta122/60;

    	$request->pregunta13 = $request->pregunta131 + $request->pregunta132/60;

    	if ($request->pregunta151 != '') {
    		$request->pregunta15 .= $request->pregunta151 . '+';
    	}
    	if ($request->pregunta152 != '') {
    		$request->pregunta15 .= $request->pregunta152 . '+';
    	}
    	if ($request->pregunta153 != '') {
    		$request->pregunta15 .= $request->pregunta153 . '+';
    	}
    	if ($request->pregunta154 != '') {
    		$request->pregunta15 .= $request->pregunta154 . '+';
    	}
    	if ($request->pregunta155 != '') {
    		$request->pregunta15 .= $request->pregunta155 . '+';
    	}
    	if ($request->pregunta156 != '') {
    		$request->pregunta15 .= $request->pregunta156 . '+';
    	}
    	if ($request->pregunta157 != '') {
    		$request->pregunta15 .= $request->pregunta157 . '+';
    	}
    	if ($request->pregunta158 != '') {
    		$request->pregunta15 .= $request->pregunta158 . '+';
    	}
    	if ($request->pregunta159 != '') {
    		$request->pregunta15 .= $request->pregunta159 . '+';
    	}
    	if ($request->pregunta1510 != '') {
    		$request->pregunta15 .= $request->pregunta1510 . '+';
    	}
    	if ($request->pregunta1511 != '') {
    		$request->pregunta15 .= $request->pregunta1511 . '+';
    	}
    	if ($request->pregunta1512 != '') {
    		$request->pregunta15 .= $request->pregunta1512 . '+';
    	}
    	// $request->pregunta15 = $request->pregunta151 . '+' . $request->pregunta152 . '+' . $request->pregunta153 . '+' . $request->pregunta154 . '+' . $request->pregunta155 . '+' . $request->pregunta156 . '+' . $request->pregunta157 . '+' . $request->pregunta158 . '+' . $request->pregunta159 . '+' . $request->pregunta1510 . '+' . $request->pregunta1511 . '+' . $request->pregunta1512 . '+';

    	if ($request->pregunta161 != '') {
    		$request->pregunta16 .= $request->pregunta161 . '+';
    	}
    	if ($request->pregunta162 != '') {
    		$request->pregunta16 .= $request->pregunta162 . '+';
    	}
    	if ($request->pregunta163 != '') {
    		$request->pregunta16 .= $request->pregunta163 . '+';
    	}
    	if ($request->pregunta164 != '') {
    		$request->pregunta16 .= $request->pregunta164 . '+';
    	}
    	if ($request->pregunta165 != '') {
    		$request->pregunta16 .= $request->pregunta165 . '+';
    	}
    	// $request->pregunta16 = $request->pregunta161 . '+' . $request->pregunta162 . '+' . $request->pregunta163 . '+' . $request->pregunta164 . '+' . $request->pregunta165 . '+';
    	
    	DB::table('modelo3')->insert([
    		'pregunta1' => $request->pregunta1, 
		    'pregunta2' => $request->pregunta2,
		    'pregunta3' => $request->pregunta3, 
		    'pregunta4' => $request->pregunta4,
		    'pregunta5' => $request->pregunta5, 
		    'pregunta6' => $request->pregunta6,
		    'pregunta7' => $request->pregunta7, 
		    'pregunta8' => $request->pregunta8,
		    'pregunta9' => $request->pregunta9, 
		    'pregunta10' => $request->pregunta10,
		    'pregunta11' => $request->pregunta11, 
		    'pregunta12' => $request->pregunta12,
		    'pregunta13' => $request->pregunta13, 
		    'pregunta14' => $request->pregunta14,
		    'pregunta15' => $request->pregunta15, 
		    'pregunta16' => $request->pregunta16,
		    'pregunta17' => $request->pregunta17,
		    'pregunta18' => $request->pregunta18, 
		    'pregunta19' => $request->pregunta19,
		    'pregunta20' => $request->pregunta20, 
		]);
		return redirect('/modelo3');
    }

    public function aleatorio(){
    	$valores = MetodoCongruencialMixto::Method(4, 5, 7, 8);
    	dd($valores);
    }

    public function insertRandom(Request $request){
    	$pregunta2 = ['Masculino', 'Femenino'];
		$pregunta5 = ['En este lugar', 'En otro lugar del pais', 'En el exterior'];
		$pregunta8 = ['Boliviano/a rural', 'Boliviano/a urbano', 'Extranjero'];
		$pregunta9 = ['Medicina general', 'Medicina especializada', 'Otro'];
		$pregunta10 = ['Madrugar', 'Via telefonica', 'Comprar ficha dia anterior', 'Via internet', 'Otro'];
		$pregunta15 = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
		$pregunta16 = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];
		$pregunta20 = ['Calidad', 'Servicio', 'Garantia', 'Precio'];

    	while ($request->cantidad > 0) {
    		$preg = [
    			'pregunta1' => 'anonimo',
    			'pregunta2' => array_random($pregunta2),
    			'pregunta3' => rand(18,60),
    			'pregunta4' => $this->random_date('1957-01-01', '1999-12-30'),
    			'pregunta5' => array_random($pregunta5),
    			'pregunta6' => rand(1, 240),
    			'pregunta7' => rand(1, 120),
    			'pregunta8' => array_random($pregunta8),
    			'pregunta9' => array_random($pregunta9),
    			'pregunta10' => array_random($pregunta10),
    			'pregunta11' => rand(1, 72),
    			'pregunta12' => rand(0, 180),
    			'pregunta13' => rand(10, 60),
    			'pregunta14' => rand(0, 5),
    			'pregunta15' => array_random($pregunta15, rand(1, 3)),
    			'pregunta16' => array_random($pregunta16, rand(1, 2)),
    			'pregunta17' => rand(1, 10),
    			'pregunta18' => rand(1, 10),
    			'pregunta19' => rand(1, 10),
    			'pregunta20' => array_random($pregunta20),
    		];
			dd($preg);
			$request->cantidad--;
    	}
    }

    public function random_date($from, $to) {
	    if (!$to) {
	        $to = date('U');
	    }
	    if (!ctype_digit($from)) {
	        $from = strtotime($from);
	    }
	    if (!ctype_digit($to)) {
	        $to = strtotime($to);
	    }
	    return date('Y-m-d', rand($from, $to));
	}
    public function borrarModelo3(){
    	DB::table('modelo3')->delete();
    }

}
