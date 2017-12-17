<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo3 extends Model
{
    protected $table = 'modelo3';
    protected $fillable = ['pregunta1', 'pregunta2', 'pregunta3', 'pregunta4', 'pregunta5', 'pregunta6', 'pregunta7', 'pregunta8', 'pregunta9', 'pregunta10', 'pregunta11', 'pregunta12', 'pregunta13', 'pregunta14', 'pregunta15', 'pregunta16', 'pregunta17', 'pregunta18', 'pregunta19', 'pregunta20' ];
    //ya no guarda el created_at, updated_at 
    public $timestamps = false;
}
