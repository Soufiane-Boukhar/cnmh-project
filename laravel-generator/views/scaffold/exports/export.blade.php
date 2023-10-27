@php
    echo "<?php".PHP_EOL;
@endphp

namespace App\Exports;

use App\Models\{{ $config->modelNames->camel }};
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Export{{ $config->modelNames->name }} implements FromCollection,WithHeadings
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