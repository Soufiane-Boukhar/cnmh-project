<?php

namespace App\Exports;

use App\Models\Service;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class ServiceExport implements FromCollection , WithHeadings,WithTitle
{
        /**
     * @return Collection
     */

    // Cette méthode est responsable de la fourniture des données à exporter vers un fichier Excel

    public function collection()
    {
        $services = Service::select("nom", "description")->get();

        // Supprimer les balises HTML du champ de description

        $services->transform(function ($service) {
            $service->description = strip_tags($service->description);
            return $service;
        });

        return $services;
    }

    //  Cette méthode est responsable de la fourniture des en-têtes pour les colonnes du fichier Excel

    public function headings(): array
    {
        return ["Nom", "Description"];
    }

    // Cette méthode est responsable de spécifier un titre pour le fichier Excel

    public function title(): string
    {
        return 'Prestation';
    }

}
