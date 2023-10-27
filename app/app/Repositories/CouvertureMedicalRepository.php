<?php

namespace App\Repositories;

use App\Models\CouvertureMedical;
use App\Repositories\BaseRepository;

class CouvertureMedicalRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nom',
        'description'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return CouvertureMedical::class;
    }
}
