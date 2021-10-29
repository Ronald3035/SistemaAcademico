<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paralelo extends Model
{
    use HasFactory;
     protected $table ="paralelo";
    protected $fillable= ['id','nombre','state','created_at','updated_at'];
}
