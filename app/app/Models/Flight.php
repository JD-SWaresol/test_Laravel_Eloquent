<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */

     //Especificamos el nombre de la tabla del modelo de forma manual usando $table
     protected $table = 'my_flights';
}
