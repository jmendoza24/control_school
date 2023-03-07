<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumnos>
 */
class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'nombre'=> $this->faker->name(),
            'edad'=>$this->faker->randomDigit(),
            'nombre_padre'=>$this->faker->sentence(),
            'nombre_madre'=>$this->faker->sentence(),
            'nombre_padre'=>$this->faker->sentence(),
            'telefono'=>$this->faker->phoneNumber(),
            'correo'=>$this->faker->email(),
            'telefono'=>$this->faker->address(),
            'escuela'=>$this->faker->randomDigit(),
            'direccion'=>$this->faker->sentence(),
        ];
    }
}
