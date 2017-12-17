<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Modelo3;
use App\MetodoCongruencialMixto;

class modelo3Controller extends Controller
{
    public function index(){
        $modelo3 = DB::table('modelo3')->get();
        return view('datos', compact('modelo3'));
    }

    // SACA LOS RESULTADOS DE LA DB Y LOS MUESTRA EN GRAFICAS
    public function resultados(){
        $pregunta2 = [
            ['name' => 'Masculino', 'valor' => DB::table('modelo3')->where('pregunta2', 'Masculino')->count()],
            ['name' => 'Femenino', 'valor' => DB::table('modelo3')->where('pregunta2', 'Femenino')->count()],
        ];
        $pregunta2_ = DB::table('modelo3')->select('pregunta1', 'pregunta2')->get();
        $pregunta3 = [
            ['name' => '18-30 años', 'valor' => DB::table('modelo3')->whereBetween('pregunta3', array(18, 29))->count()],
            ['name' => '30-45 años', 'valor' => DB::table('modelo3')->whereBetween('pregunta3', array(30, 44))->count()],
            ['name' => '45-60 años', 'valor' => DB::table('modelo3')->whereBetween('pregunta3', array(45, 60))->count()],
        ];
        $pregunta5 = [
            ['name' => 'En este lugar', 'valor' => DB::table('modelo3')->where('pregunta5', 'En este lugar')->count()],
            ['name' => 'En otro lugar del pais', 'valor' => DB::table('modelo3')->where('pregunta5', 'En otro lugar del pais')->count()],
            ['name' => 'En el exterior', 'valor' => DB::table('modelo3')->where('pregunta5', 'En el exterior')->count()],
        ];
        $pregunta6 = [
            ['name' => '0-5 años', 'valor' => DB::table('modelo3')->whereBetween('pregunta6', array(0, 59))->count()],
            ['name' => '5-10 años', 'valor' => DB::table('modelo3')->whereBetween('pregunta6', array(60, 119))->count()],
            ['name' => '10-15 años', 'valor' => DB::table('modelo3')->whereBetween('pregunta6', array(120, 179))->count()],
            ['name' => '15-20 años', 'valor' => DB::table('modelo3')->whereBetween('pregunta6', array(180, 240))->count()],
        ];
        $pregunta7 = [
            ['name' => '0-2 años', 'valor' => DB::table('modelo3')->whereBetween('pregunta7', array(0, 23))->count()],
            ['name' => '2-4 años', 'valor' => DB::table('modelo3')->whereBetween('pregunta7', array(24, 47))->count()],
            ['name' => '4-6 años', 'valor' => DB::table('modelo3')->whereBetween('pregunta7', array(48, 71))->count()],
            ['name' => '6-8 años', 'valor' => DB::table('modelo3')->whereBetween('pregunta7', array(72, 95))->count()],
            ['name' => '8-10 años', 'valor' => DB::table('modelo3')->whereBetween('pregunta7', array(96, 120))->count()],
        ];
        $pregunta8 = [
            ['name' => 'Boliviano/a rural', 'valor' => DB::table('modelo3')->where('pregunta8', 'Boliviano/a rural')->count()],
            ['name' => 'Boliviano/a urbano', 'valor' => DB::table('modelo3')->where('pregunta8', 'Boliviano/a urbano')->count()],
            ['name' => 'Extranjero', 'valor' => DB::table('modelo3')->where('pregunta8', 'Extranjero')->count()],
        ];
        $pregunta9 = [
            ['name' => 'Medicina general', 'valor' => DB::table('modelo3')->where('pregunta9', 'Medicina general')->count()],
            ['name' => 'Medicina especializada', 'valor' => DB::table('modelo3')->where('pregunta9', 'Medicina especializada')->count()],
            ['name' => 'Otro', 'valor' => DB::table('modelo3')->where('pregunta9', 'Otro')->count()],
        ];
        $pregunta10 = [
            ['name' => 'Madrugar', 'valor' => DB::table('modelo3')->where('pregunta10', 'Madrugar')->count()],
            ['name' => 'Via telefonica', 'valor' => DB::table('modelo3')->where('pregunta10', 'Via telefonica')->count()],
            ['name' => 'Comprar ficha dia anterior', 'valor' => DB::table('modelo3')->where('pregunta10', 'Comprar ficha dia anterior')->count()],
            ['name' => 'Via internet', 'valor' => DB::table('modelo3')->where('pregunta10', 'Via internet')->count()],
            ['name' => 'Otro', 'valor' => DB::table('modelo3')->where('pregunta10', 'Otro')->count()],
        ];
        $pregunta11 = [
            ['name' => '0-12 horas', 'valor' => DB::table('modelo3')->whereBetween('pregunta11', array(0, 11))->count()],
            ['name' => '12-24 horas', 'valor' => DB::table('modelo3')->whereBetween('pregunta11', array(12, 23))->count()],
            ['name' => '24-36 horas', 'valor' => DB::table('modelo3')->whereBetween('pregunta11', array(24, 35))->count()],
            ['name' => '36-48 horas', 'valor' => DB::table('modelo3')->whereBetween('pregunta11', array(36, 47))->count()],
            ['name' => '48-60 horas', 'valor' => DB::table('modelo3')->whereBetween('pregunta11', array(48, 59))->count()],
            ['name' => '60-72 horas', 'valor' => DB::table('modelo3')->whereBetween('pregunta11', array(60, 72))->count()],
        ];
        $pregunta12 = [
            ['name' => '0-30 minutos', 'valor' => DB::table('modelo3')->whereBetween('pregunta12', array(0, 29))->count()],
            ['name' => '30-60 minutos', 'valor' => DB::table('modelo3')->whereBetween('pregunta12', array(30, 59))->count()],
            ['name' => '60-90 minutos', 'valor' => DB::table('modelo3')->whereBetween('pregunta12', array(60, 89))->count()],
            ['name' => '90-120 minutos', 'valor' => DB::table('modelo3')->whereBetween('pregunta12', array(90, 119))->count()],
            ['name' => '120-150 minutos', 'valor' => DB::table('modelo3')->whereBetween('pregunta12', array(120, 149))->count()],
            ['name' => '150-180 minutos', 'valor' => DB::table('modelo3')->whereBetween('pregunta12', array(150, 180))->count()],
        ];
        $pregunta13 = [
            ['name' => '10-20 minutos', 'valor' => DB::table('modelo3')->whereBetween('pregunta13', array(0, 19))->count()],
            ['name' => '20-30 minutos', 'valor' => DB::table('modelo3')->whereBetween('pregunta13', array(20, 29))->count()],
            ['name' => '30-40 minutos', 'valor' => DB::table('modelo3')->whereBetween('pregunta13', array(30, 39))->count()],
            ['name' => '40-50 minutos', 'valor' => DB::table('modelo3')->whereBetween('pregunta13', array(40, 49))->count()],
            ['name' => '50-60 minutos', 'valor' => DB::table('modelo3')->whereBetween('pregunta13', array(50, 60))->count()],
        ];
        $pregunta14 = [
            ['name' => '0 personas', 'valor' => DB::table('modelo3')->where('pregunta14', 0)->count()],
            ['name' => '1 personas', 'valor' => DB::table('modelo3')->where('pregunta14', 1)->count()],
            ['name' => '2 personas', 'valor' => DB::table('modelo3')->where('pregunta14', 2)->count()],
            ['name' => '3 personas', 'valor' => DB::table('modelo3')->where('pregunta14', 3)->count()],
            ['name' => '4 personas', 'valor' => DB::table('modelo3')->where('pregunta14', 4)->count()],
            ['name' => '5 personas', 'valor' => DB::table('modelo3')->where('pregunta14', 5)->count()],
        ];
        $aux = DB::table('modelo3')->select('pregunta15')->get();
        $enero = 0; $febrero = 0; $marzo = 0; $abril = 0; $mayo = 0; $junio = 0; $julio = 0; $agosto = 0; $septiembre = 0; $octubre = 0; $noviembre = 0; $diciembre = 0;
        foreach ($aux as $key) {
            $aux1 = explode('+', $key->pregunta15);
            foreach ($aux1 as $a) {
                if ($a == 'Enero') {$enero++;}
                if ($a == 'Febrero') {$febrero++;}
                if ($a == 'Marzo') {$marzo++;}
                if ($a == 'Abril') {$abril++;}
                if ($a == 'Mayo') {$mayo++;}
                if ($a == 'Junio') {$junio++;}
                if ($a == 'Julio') {$julio++;}
                if ($a == 'Agosto') {$agosto++;}
                if ($a == 'Septiembre') {$septiembre++;}
                if ($a == 'Octubre') {$octubre++;}
                if ($a == 'Noviembre') {$noviembre++;}
                if ($a == 'Diciembre') {$diciembre++;}
            }
        }
        $pregunta15 = [
            ['name' => 'Enero', 'valor' => $enero],
            ['name' => 'Febrero', 'valor' => $febrero],
            ['name' => 'Marzo', 'valor' => $marzo],
            ['name' => 'Abril', 'valor' => $abril],
            ['name' => 'Mayo', 'valor' => $mayo],
            ['name' => 'Junio', 'valor' => $junio],
            ['name' => 'Julio', 'valor' => $julio],
            ['name' => 'Agosto', 'valor' => $agosto],
            ['name' => 'Septiembre', 'valor' => $septiembre],
            ['name' => 'Octubre', 'valor' => $octubre],
            ['name' => 'Noviembre', 'valor' => $noviembre],
            ['name' => 'Diciembre', 'valor' => $diciembre],
        ];
        $aux = DB::table('modelo3')->select('pregunta16')->get();
        $lunes = 0; $martes = 0; $miercoles = 0; $jueves = 0; $viernes = 0;
        foreach ($aux as $key) {
            $aux1 = explode('+', $key->pregunta16);
            foreach ($aux1 as $a) {
                if ($a == 'Lunes') {$lunes++;}
                if ($a == 'Martes') {$martes++;}
                if ($a == 'Miercoles') {$miercoles++;}
                if ($a == 'Jueves') {$jueves++;}
                if ($a == 'Viernes'){ $viernes++;}
            }        
        }
        $pregunta16 = [
            ['name' => 'Lunes', 'valor' => $lunes],
            ['name' => 'Martes', 'valor' => $martes],
            ['name' => 'Miercoles', 'valor' => $miercoles],
            ['name' => 'Jueves', 'valor' => $jueves],
            ['name' => 'Viernes', 'valor' => $viernes],
        ];
        $pregunta17 = [
            ['name' => '1', 'valor' => DB::table('modelo3')->where('pregunta17', 1)->count()],
            ['name' => '2', 'valor' => DB::table('modelo3')->where('pregunta17', 2)->count()],
            ['name' => '3', 'valor' => DB::table('modelo3')->where('pregunta17', 3)->count()],
            ['name' => '4', 'valor' => DB::table('modelo3')->where('pregunta17', 4)->count()],
            ['name' => '5', 'valor' => DB::table('modelo3')->where('pregunta17', 5)->count()],
            ['name' => '6', 'valor' => DB::table('modelo3')->where('pregunta17', 6)->count()],
            ['name' => '7', 'valor' => DB::table('modelo3')->where('pregunta17', 7)->count()],
            ['name' => '8', 'valor' => DB::table('modelo3')->where('pregunta17', 8)->count()],
            ['name' => '9', 'valor' => DB::table('modelo3')->where('pregunta17', 9)->count()],
            ['name' => '10', 'valor' => DB::table('modelo3')->where('pregunta17', 10)->count()],
        ];
        $pregunta18 = [
            ['name' => '1', 'valor' => DB::table('modelo3')->where('pregunta18', 1)->count()],
            ['name' => '2', 'valor' => DB::table('modelo3')->where('pregunta18', 2)->count()],
            ['name' => '3', 'valor' => DB::table('modelo3')->where('pregunta18', 3)->count()],
            ['name' => '4', 'valor' => DB::table('modelo3')->where('pregunta18', 4)->count()],
            ['name' => '5', 'valor' => DB::table('modelo3')->where('pregunta18', 5)->count()],
            ['name' => '6', 'valor' => DB::table('modelo3')->where('pregunta18', 6)->count()],
            ['name' => '7', 'valor' => DB::table('modelo3')->where('pregunta18', 7)->count()],
            ['name' => '8', 'valor' => DB::table('modelo3')->where('pregunta18', 8)->count()],
            ['name' => '9', 'valor' => DB::table('modelo3')->where('pregunta18', 9)->count()],
            ['name' => '10', 'valor' => DB::table('modelo3')->where('pregunta18', 10)->count()],
        ];
        $pregunta19 = [
            ['name' => '1', 'valor' => DB::table('modelo3')->where('pregunta19', 1)->count()],
            ['name' => '2', 'valor' => DB::table('modelo3')->where('pregunta19', 2)->count()],
            ['name' => '3', 'valor' => DB::table('modelo3')->where('pregunta19', 3)->count()],
            ['name' => '4', 'valor' => DB::table('modelo3')->where('pregunta19', 4)->count()],
            ['name' => '5', 'valor' => DB::table('modelo3')->where('pregunta19', 5)->count()],
            ['name' => '6', 'valor' => DB::table('modelo3')->where('pregunta19', 6)->count()],
            ['name' => '7', 'valor' => DB::table('modelo3')->where('pregunta19', 7)->count()],
            ['name' => '8', 'valor' => DB::table('modelo3')->where('pregunta19', 8)->count()],
            ['name' => '9', 'valor' => DB::table('modelo3')->where('pregunta19', 9)->count()],
            ['name' => '10', 'valor' => DB::table('modelo3')->where('pregunta19', 10)->count()],
        ];
        $pregunta20 = [
            ['name' => 'Calidad', 'valor' => DB::table('modelo3')->where('pregunta20', 'Calidad')->count()],
            ['name' => 'Servicio', 'valor' => DB::table('modelo3')->where('pregunta20', 'Servicio')->count()],
            ['name' => 'Garantia', 'valor' => DB::table('modelo3')->where('pregunta20', 'Garantia')->count()],
            ['name' => 'Precio', 'valor' => DB::table('modelo3')->where('pregunta20', 'Precio')->count()]
        ];

    	return view('estadisticas', [
            'pregunta2' => $pregunta2,
            'pregunta2_' => $pregunta2_,
            'pregunta3' => $pregunta3,
            'pregunta5' => $pregunta5,
            'pregunta6' => $pregunta6,
            'pregunta7' => $pregunta7,
            'pregunta8' => $pregunta8,
            'pregunta9' => $pregunta9,
            'pregunta10' => $pregunta10,
            'pregunta11' => $pregunta11,
            'pregunta12' => $pregunta12,
            'pregunta13' => $pregunta13,
            'pregunta14' => $pregunta14,
            'pregunta15' => $pregunta15,
            'pregunta16' => $pregunta16,
            'pregunta17' => $pregunta17,
            'pregunta18' => $pregunta18,
            'pregunta19' => $pregunta19,
            'pregunta20' => $pregunta20,
        ]);
    }

    public function pdfdocument(){
        $data = DB::table('modelo3')->select('pregunta1', 'pregunta2')->get();
        $pdf = PDF::loadView('pdf.invoice', $data);
        return $pdf->download('invoice.pdf');
    }

    // GUARDA EN LA BASE DE DATOS LO QUE SE LLENA EN LA ENCUESTA
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

    // GENERA VALORES ALEATORIOS POR EL METODO CONGRUENCIAL MIXTO
    public function aleatorio(){
    	$valores = MetodoCongruencialMixto::Method(4, 5, 7, 8);
    	dd($valores);
    }

    // PREPARA LOS DATOS E INGRESA LOS DATOS ALEATORIOS EN LA DB
    public function insertRandom(Request $request){
    	$this->borrarModelo3();
    	$pregunta2 = ['Masculino', 'Femenino'];
		$pregunta5 = ['En este lugar', 'En otro lugar del pais', 'En el exterior'];
		$pregunta8 = ['Boliviano/a rural', 'Boliviano/a urbano', 'Extranjero'];
		$pregunta9 = ['Medicina general', 'Medicina especializada', 'Otro'];
		$pregunta10 = ['Madrugar', 'Via telefonica', 'Comprar ficha dia anterior', 'Via internet', 'Otro'];
		$pregunta15 = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
		$pregunta16 = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];
		$pregunta20 = ['Calidad', 'Servicio', 'Garantia', 'Precio'];

    	while ($request->cantidad > 0) {
            $resp15 = array_random($pregunta15, rand(1, 3));
            $resp16 = array_random($pregunta16, rand(1, 2));
            $preg15 = '';
            $preg16 = '';
            foreach ($resp15 as $value) {
                $preg15 .= $value . '+';
            }
            foreach ($resp16 as $value) {
                $preg16 .= $value . '+';
            }
    		$preg = [
    			'pregunta1' => 'anonimo' . $request->cantidad,
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
    			'pregunta15' => $preg15,
    			'pregunta16' => $preg16,
    			'pregunta17' => rand(1, 10),
    			'pregunta18' => rand(1, 10),
    			'pregunta19' => rand(1, 10),
    			'pregunta20' => array_random($pregunta20),
    		];
			$request->cantidad--;
			$this->guardar($preg);
    	}
    	return redirect('/');
    }

    // GUARDA LOS DATOS ALEATORIOS GENERADOS EN LA DB
    public function guardar($request){
    	DB::table('modelo3')->insert([
    		'pregunta1' => $request['pregunta1'], 
		    'pregunta2' => $request['pregunta2'],
		    'pregunta3' => $request['pregunta3'], 
		    'pregunta4' => $request['pregunta4'],
		    'pregunta5' => $request['pregunta5'], 
		    'pregunta6' => $request['pregunta6'],
		    'pregunta7' => $request['pregunta7'], 
		    'pregunta8' => $request['pregunta8'],
		    'pregunta9' => $request['pregunta9'], 
		    'pregunta10' => $request['pregunta10'],
		    'pregunta11' => $request['pregunta11'], 
		    'pregunta12' => $request['pregunta12'],
		    'pregunta13' => $request['pregunta13'], 
		    'pregunta14' => $request['pregunta14'],
		    'pregunta15' => $request['pregunta15'], 
		    'pregunta16' => $request['pregunta16'],
		    'pregunta17' => $request['pregunta17'],
		    'pregunta18' => $request['pregunta18'], 
		    'pregunta19' => $request['pregunta19'],
		    'pregunta20' => $request['pregunta20'], 
		]);
    }

    // DADO UN RANGO DE FECHAS SACA ALEATORIAMENTE
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

    // BORRA DE LA TABLA MODELO3 TODA SU INFORMACION
    public function borrarModelo3(){
    	DB::table('modelo3')->delete();
    }

}
