<?php

namespace Database\Factories;

use App\Models\libros;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = libro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo'=>$this->faker->name(),
            'autor'=>$this->faker->name(),
            'aditotial'=>$this->faker->name(),
            'fecha de publicacion'=>$this->faker->name(),
            'numero de paginas'=>$this->faker->integer()
        ];
    }
}
