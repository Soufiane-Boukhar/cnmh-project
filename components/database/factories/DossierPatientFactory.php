<?php

namespace Database\Factories;

use App\Models\DossierPatient;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\CouvertureMedical;
use App\Models\Patient;

class DossierPatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DossierPatient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $patient = Patient::first();
        if (!$patient) {
            $patient = Patient::factory()->create();
        }

        return [
            'patient_id' => $this->faker->word,
            'couverture_medical_id' => $this->faker->word,
            'numero_dossier' => $this->faker->word,
            'etat' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'date_enregsitrement' => $this->faker->date('Y-m-d'),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
