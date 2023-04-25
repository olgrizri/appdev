<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;


    public $timestamps = false;
    protected $primarykey='cod_asignatura';
    
    protected $fillable = ['nombre','creditos'];

}
