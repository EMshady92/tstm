<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramacionComprasModel extends Model
{
    use HasFactory;
    protected $table ="programacion_compras";
    protected $fillable = ['po','year','month','supplier','material','lot','supplier_weight','reception_date','estatus','bascula','observaciones','importacion','captura','estado'];
}
