<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =
    ['documento_identidad','nombre',
    'apellido','edad','email','telefono'];

}
