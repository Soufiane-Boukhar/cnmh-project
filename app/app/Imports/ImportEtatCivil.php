<?php

namespace App\Imports;

use App\Models\EtatCivil;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportEtatCivil implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new EtatCivil([
            'nom' => $row[1],
            'description' => $row[2],
        ]);
    }
}
