<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * Con Eloquent todos los modelos usan una conexión a base de datos configurada de forma predeterminada.
     * 
     * Si necesutamos especificar alguna conexión en especifico con algún modelo en particular, definimos la 
     * propiedad '$connection'.
     */

               

    /** The database connection that should be used by the model.
     *
     *@var string
     */
     protected $connection = 'mysql';
}
