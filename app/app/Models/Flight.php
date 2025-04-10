<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The table associated with the model.
     * 
     * The primary key associated with the table.
     * 
     * Indicates if the model's ID is auto-incrementing.
     * 
     * The data type of the primary key ID.
     * 
     * @var string
     * 
     * @var bool
     * 
     * @var string
     */

     //Especificamos el nombre de la tabla del modelo de forma manual usando $table
     protected $table = 'my_flights';

     //Definimos una Llave primaria protegida para el modelo usando $primaryKey
     protected $primaryKey = 'flight_id';

     //Definimos si la Llave primaria que tendrá el modelo no es autoincrementable
     public $incrementing = false;

     //Definimos si la llave primaria sera de tipo NO Numerica
     protected $keyType = 'string';
}
