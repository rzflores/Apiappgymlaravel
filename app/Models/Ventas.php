<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $fillable = ['numeroTran','fecha', 'nombre', 'precio' , 'cantidad' , 'total'];
    use HasFactory;
}
