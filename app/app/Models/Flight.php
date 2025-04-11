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

     
     // Para personalizar los nombres de las columnas usadas para almacenar las marcas de tiempo se puede definir las siguientes constantes en el modelo:
     const CREATED_AT = 'creation_date';

     const UPDATED_AT = 'updated_date';


     // En caso de que se quieran realizar operaciones en el modelo sin que 'update_at' modifique la marca de tiempo 
     // del modelo, se puede usar el modelo 'withoutTimestamps'
     Model::withoutTimestamps(fn () => $post->increment('reads'));
}
