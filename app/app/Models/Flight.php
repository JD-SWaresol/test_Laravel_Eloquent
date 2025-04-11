<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * 'created_at' y 'update_at' son columnas que se establecen de forma automatica dentro de 
     * una tabla de base de datos por medio de Eloquent y ademnás este ultimo las gestiona de 
     * forma automatica.
     * 
     * Si no necesitamos que Eloquent la gestione de forma automatica definimos: $timestamps = false
     */

     /**
      * Indicates if the model should be timestamped.
      *
      * @var bool
      */

     // Gestion automatica de Eloquent inactiva
     public $timestamps = false;
}
