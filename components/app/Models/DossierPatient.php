<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
class DossierPatient extends Model
{
    use HasFactory;    public $table = 'dossier_patients';

    public $fillable = [
        'patient_id',
        'couverture_medical_id',
        'numero_dossier',
        'etat',
        'date_enregsitrement'
    ];

    protected $casts = [
        'etat' => 'string',
        'date_enregsitrement' => 'date'
    ];

    public static array $rules = [
        'patient_id' => 'required',
        'couverture_medical_id' => 'required',
        'numero_dossier' => 'required',
        'etat' => 'required|string|max:255',
        'date_enregsitrement' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function couvertureMedical(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\CouvertureMedical::class, 'couverture_medical_id');
    }

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id');
    }

    public function orientationExternes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\OrientationExterne::class, 'dossier_patient_id');
    }

    public function dossierPatientTypeHandicaps(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\DossierPatientTypeHandicap::class, 'dossier_patient_id');
    }

    public function dossierPatientConsultations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\DossierPatientConsultation::class, 'dossier_patient_id');
    }

    public function dossierPatientServices(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\DossierPatientService::class, 'dossier_patient_id');
    }
}
