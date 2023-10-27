<?php

namespace App\Repositories;

use App\Models\Employe;
use App\Repositories\BaseRepository;

class EmployeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'fonction_id',
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse',
        'date_naissance',
        'cin',
        'date_embauche'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Employe::class;
    }
}
