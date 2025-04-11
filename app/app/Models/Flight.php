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
      * Con la propiedad '$dateFormat' podemos personalizar el formato de las marcas de tiempo de un modelo. 
      */

     /**
      * Indicates if the model should be timestamped.
      *
      * @var bool
      *
      * The storage format of the model's date columns.
      * @var string
      */

     // Gestion automatica de Eloquent inactiva
     public $timestamps = false;

     //Esta propiedad determnina como almacenar los atributos de fecha en la base de datos, así como su tipo de formato cuando el modelo se serializa en una matriz o JSON.
     protected $dateFormat = 'U';
}
