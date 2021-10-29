<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    use HasFactory;
    protected $table ="administrativo";
    protected $fillable= ['id','persona_id','formacion','cargo','state','created_at','updated_at'];
}
