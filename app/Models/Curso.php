<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table ="curso";
    protected $fillable= ['id','grado_id','paralelo_id','state','created_at','updated_at'];
}
