<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramacionVentasModel extends Model
{
    use HasFactory;
    protected $table ="programacion_ventas";
    protected $fillable = ['orden','year','month','cliente','material','lote','c_lotes','p_list','fecha_envio','n_sellos','n_cajas','estatus','bascula','observaciones','captura','estado'];
}
