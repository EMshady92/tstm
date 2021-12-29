<?php

namespace App\Imports;

use App\Models\ProgramacionVentasModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Auth;

class ImportVenta implements ToModel
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
            'orden' => $row[0],
            'year' => $row[1],
            'month' => $row[2],
            'cliente' => $row[3],
            'material' => $row[4],
            'lote' => $row[5],
            'c_lotes' => $row[6],
            'p_list' => $row[7],
            'fecha_envio' => $row[8],
            'n_sellos' => $row[9],
            'n_cajas' => $row[10],
            'estatus' => 0,
            'bascula' => 0,
            'observaciones' => $row[11],
            'captura' => "Nombre: ". $user->nombre ." Usuario:". $user->usuario,
            'estado' => "ACTIVO",
        ]);
    }
}
