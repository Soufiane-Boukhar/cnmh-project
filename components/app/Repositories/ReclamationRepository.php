<?php

namespace App\Repositories;

use App\Models\Reclamation;
use App\Repositories\BaseRepository;

class ReclamationRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'patient_id',
        'objet',
        'reclamation',
        'date_reclamation'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Reclamation::class;
    }
}
