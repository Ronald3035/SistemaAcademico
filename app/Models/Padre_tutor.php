<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padre_tutor extends Model
{
    use HasFactory;
    protected $table ="padre_tutor";
    protected $fillable= ['id','persona_id','direccion','ocupacion','estado','created_at','updated_at'];
}
