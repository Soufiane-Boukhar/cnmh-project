<?php

namespace App\Imports;

use App\Models\Service;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ServiceImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public $headingRow = null;


    //  Cette méthode est responsable de la transformation d'un tableau représentant une ligne de données Excel en une instance de modèle Service.

    public function model(array $row)
    {
        return new Service([
            'nom' => $row[0],
            'description' => $row[1],
        ]);
    }

    // Cette méthode est responsable de spécifier à partir de quelle ligne doit commencer l'importation de données.

    public function startRow():int{

        // l'importation de données commencera à partir de la deuxième ligne du fichier Excel
        
        return 2; 
    }
}
