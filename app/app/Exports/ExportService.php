<?php

namespace App\Exports;

use App\Models\service;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportService implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */


    public function collection()
    {
        return couvertureMedical::select("id")->get();
    }


    public function headings(): array
    {
        return [ "Id"];
    }
}