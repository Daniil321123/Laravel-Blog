<?php

namespace Database\Factories;

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            $name = $this->faker->realText(rand(40, 50));
            return [
                'name' => $name,
                'content' => $this->faker->realText(rand(200, 500)),
                'slug' => Str::slug($name),
            ];
    }

}
