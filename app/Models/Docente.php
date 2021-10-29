<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $table ="docente";
    protected $fillable= ['id','persona_id','especialidad','horas_item','state','created_at','updated_at'];
}
