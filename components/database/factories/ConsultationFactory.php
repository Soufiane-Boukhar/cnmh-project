<?php

namespace Database\Factories;

use App\Models\Consultation;
use Illuminate\Database\Eloquent\Factories\Factory;


class ConsultationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Consultation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'date_enregistrement' => $this->faker->date('Y-m-d H:i:s'),
            'date_consultation' => $this->faker->date('Y-m-d H:i:s'),
            'observation' => $this->faker->text($this->faker->numberBetween(5, 65535)),
            'diagnostic' => $this->faker->text($this->faker->numberBetween(5, 65535)),
            'bilan' => $this->faker->text($this->faker->numberBetween(5, 65535)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
