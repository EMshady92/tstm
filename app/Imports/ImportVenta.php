<?php

namespace App\Imports;

use App\Models\ProgramacionVentasModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ImportVenta implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user=Auth::user();
        return new ProgramacionVentasModel([
            'orden' => $row['orden'],
            'year' => $row['year'],
            'month' => $row['month'],
            'cliente' => $row['cliente'],
            'material' => $row['material'],
            'lote' => $row['lote'],
            'c_lotes' => $row['c_lotes'],
            'p_list' => $row['p_list'],
            'fecha_envio' => $row['fecha_envio'],
            'n_sellos' => $row['n_sellos'],
            'n_cajas' => $row[ 'n_cajas'],
            'estatus' => 0,
            'bascula' => 0,
            'observaciones' => $row['observaciones'],
            'captura' => "Nombre: ". $user->nombre ." Usuario:". $user->usuario,
            'estado' => "ACTIVO",
        ]);
    }
}
