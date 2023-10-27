<?php

namespace Database\Factories;

use App\Models\RendezVous;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Consultation;

class RendezVousFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RendezVous::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $consultation = Consultation::first();
        if (!$consultation) {
            $consultation = Consultation::factory()->create();
        }

        return [
            'consultation_id' => $this->faker->word,
            'date_rendez_vous' => $this->faker->date('Y-m-d H:i:s'),
            'etat' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'remarques' => $this->faker->text($this->faker->numberBetween(5, 65535)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
