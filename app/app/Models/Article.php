<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Se puede anular el proceso de generación de UUID para un modelo determinado haciendo 
     * uso de un metodo 'newUniqueId'.
     * 
     * Ademas de que se puede especificar que columnas deven recibir UUID por medio de un 
     * metodo llamado 'uniqueIds'.
     */


    /**
    * Generate a new UUID for the model.
    */

    public function newUniqueId(): string {

        return (string) Uuid::uuid4();
     
    }

    /**
    * Get the columns that should receive a unique identifier.
    *
    * @return array<int, string>
    */

    public function uniqueIds(): array
    {
        return ['id', 'discount_code'];
    }
    
}