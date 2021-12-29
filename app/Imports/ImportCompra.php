<?php

namespace App\Imports;

use App\Models\ProgramacionComprasModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;
class ImportCompra implements ToModel,WithHeadingRow
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
            'po' => $row['po'],
            'year' => $row['year'],
            'month' => $row['month'],
            'supplier' => $row['supplier'],
            'material' => $row['material'],
            'lot' => $row['lot'],
            'supplier_weight' => $row['supplier_weight'],
            'reception_date' => $row['recepcion_date'],
            'estatus' => 0,
            'bascula' => 0,
            'observaciones' => $row['observaciones'],
            'importacion' => $row['tipo_de_compra'],
            'captura' => "Nombre: ". $user->nombre ." Usuario:". $user->usuario,
            'estado' => "ACTIVO",
        ]);
    }
}
