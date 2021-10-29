<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;
    protected $table ="grado";
    protected $fillable= ['id','nombre','state','created_at','updated_at'];
}
