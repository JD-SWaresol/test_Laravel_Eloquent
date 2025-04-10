<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Las Claves UUID son Identificadores Alfanumericos y para poder hacer uso de ellos
     * necesitamos el paquete 'HasUuids'.
     * 
     * Los UUID son mas eficientes para bases de datos indexadas, pues se pueden ordenar 
     * de forma 'lexicograficamente'.
     */


    // Genera un UUID con marca de tiempo inicial que puede almacenarse eficientemente en una columna indexada de la base de datos. 
    use HasUuids;

    // ...
}

$article = Article::create(['title' => 'Traveling to Europe']);

$article->id; // "8f8e8478-9035-4d23-b9a7-62f4d2612ce5"