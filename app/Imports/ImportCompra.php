<?php

namespace App\Imports;

use App\Models\ProgramacionComprasModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Auth;
class ImportCompra implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user=Auth::user();
        return new ProgramacionComprasModel([
            'po' => $row[0],
            'year' => $row[1],
            'month' => $row[2],
            'supplier' => $row[3],
            'material' => $row[4],
            'lot' => $row[5],
            'supplier_weight' => $row[6],
            'reception_date' => $row[7],
            'estatus' => 0,
            'bascula' => 0,
            'observaciones' => $row[8],
            'importacion' => $row[9],
            'captura' => "Nombre: ". $user->nombre ." Usuario:". $user->usuario,
            'estado' => "ACTIVO",
        ]);
    }
}
