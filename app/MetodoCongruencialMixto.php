<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodoCongruencialMixto extends Model
{
    public static function Method($x, $a, $c, $mod){
    	$periodo = 0;
    	$bandera = 0;
    	$resultado;
    	while ($bandera != $x) {
    		if ($periodo == 0) {
    			$bandera = $x;
    		}
    		$x = ($a*$x + $c) % $mod;

			$resultado[] = $x;
			$periodo = $periodo + 1;
    	}
    	return $resultado;
    }
}
