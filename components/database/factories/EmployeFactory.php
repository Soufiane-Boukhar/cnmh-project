<?php

namespace Database\Factories;

use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;


class EmployeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'fonction_id' => $this->faker->word,
            'nom' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'prenom' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'email' => $this->faker->email,
            'telephone' => $this->faker->numerify('0##########'),
            'adresse' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'date_naissance' => $this->faker->date('Y-m-d'),
            'cin' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'date_embauche' => $this->faker->date('Y-m-d'),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
