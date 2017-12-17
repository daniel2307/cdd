<?php

namespace App\Http\Controllers;

use DB;
use App\Modelo3;	
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function export(){

		Excel::create('Users', function($excel) {
		 
		    
		 
		    $excel->sheet('preguntas', function($sheet) {
		 		
		 		$preguntas = Modelo3::all();
		    	$sheet->fromArray($preguntas);

				// $sheet->row(1, [
				//     'Número', 'Nombre', 'Email', 'Fecha de Creación', 'Fecha de Actualización'
				// ]);
		 		

				// foreach($users as $index => $user) {
				//     $sheet->row($index+2, [
				//         $user->id, $user->name, $user->email, $user->created_at, $user->updated_at
				//     ]);	
				// }

			});

		
		 
		})->export('xlsx');
		return redirect('datos');
    }
}
