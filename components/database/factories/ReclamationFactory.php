<?php

namespace Database\Factories;

use App\Models\Reclamation;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Patient;

class ReclamationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reclamation::class;

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
            'objet' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'reclamation' => $this->faker->text(500),
            'date_reclamation' => $this->faker->date('Y-m-d H:i:s'),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
