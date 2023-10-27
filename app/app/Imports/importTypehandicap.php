<?php

namespace App\Imports;

use App\Models\TypeHandicap;
use Maatwebsite\Excel\Concerns\ToModel;

class importTypehandicap implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TypeHandicap([
            'nom' => $row[1],
            'description' => $row[2],
        ]);
    }
}
