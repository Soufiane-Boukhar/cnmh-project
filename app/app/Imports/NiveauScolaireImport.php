<?php

namespace App\Imports;

use App\Models\NiveauScolaire;
use Maatwebsite\Excel\Concerns\ToModel;

class NiveauScolaireImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NiveauScolaire([
            'nom' => $row[0],
            'description' => $row[1],
        ]); 
    }
}
