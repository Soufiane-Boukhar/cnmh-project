<?php

namespace App\Repositories;

use App\Models\DossierPatient;
use App\Repositories\BaseRepository;

class DossierPatientRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'patient_id',
        'couverture_medical_id',
        'numero_dossier',
        'etat',
        'date_enregsitrement'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return DossierPatient::class;
    }
}
