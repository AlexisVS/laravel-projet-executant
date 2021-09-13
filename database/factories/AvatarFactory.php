<?php

namespace Database\Factories;

use App\Models\Avatar;
use Illuminate\Database\Eloquent\Factories\Factory;

class AvatarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Avatar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->colorName(),
            'fileName' => $this->faker->image("public/storage/img", "130", "130", null, false, true, "Avatar"),
        ];
    }
}
