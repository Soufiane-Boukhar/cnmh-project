<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
class Consultation extends Model
{
    use HasFactory;    public $table = 'consultations';

    public $fillable = [
        'date_enregistrement',
        'date_consultation',
        'observation',
        'diagnostic',
        'bilan'
    ];

    protected $casts = [
        'date_enregistrement' => 'datetime',
        'date_consultation' => 'datetime',
        'observation' => 'string',
        'diagnostic' => 'string',
        'bilan' => 'string'
    ];

    public static array $rules = [
        'date_enregistrement' => 'required',
        'date_consultation' => 'required',
        'observation' => 'nullable|string|max:65535',
        'diagnostic' => 'nullable|string|max:65535',
        'bilan' => 'nullable|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function rendezVous(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\RendezVou::class, 'consultation_id');
    }

    public function dossierPatientConsultations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\DossierPatientConsultation::class, 'consultation_id');
    }

    public function consultationServices(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\ConsultationService::class, 'consultation_id');
    }

    public function typeHandicapConsultations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\TypeHandicapConsultation::class, 'consultation_id');
    }
}
