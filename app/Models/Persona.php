<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table ="persona";
    protected $fillable= ['id','usuario_id','apellido_pat','apellido_mat','nombres', 'fecha_nac','ci','celular','estado','created_at','updated_at'];
}
