<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Los ULID son similares a los UUID; sin embargo, solo tienen 26 caracteres (Mientras que UUID tiene 36). 
     * 
     * Al igual que los UUID ordenados, los ULID se pueden ordenar lexicográficamente para una indexación 
     * eficiente de la base de datos. 
     * 
     * Para utilizar ULID, debe usar la Illuminate\Database\Eloquent\Concerns\HasUlidscaracterística en su modelo
     * 
     * También debe asegurarse de que el modelo tenga una columna de clave principal equivalente a ULID :
     */

     use HasUlids;

     // ...

}

$article = Article::create(['title' => 'Traveling to Asia']);

$article->id; // "01gd4d3tgrrfqeda94gdbtdk5c"