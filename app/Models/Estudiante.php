<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table ="estudiante";
    protected $fillable= ['id','persona_id','padre_tutor_id','rude','state','created_at','updated_at'];
}
