<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    use HasFactory;
    protected $table='peliculas';
    protected $fillable=['nom_pel','sinop_pel','dura_pel','cat_pel','clas_pel','imagen_pel'];
    
}
