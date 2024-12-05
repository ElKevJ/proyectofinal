<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actores extends Model
{
    use HasFactory;
    protected $table='actores';
    protected $fillable=['nom_act','pelfa_act','desc_act','imagen_act'];
    
}
