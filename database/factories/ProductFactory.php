<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'code' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 0, 999999.99),
            'price_offer' => $this->faker->randomFloat(2, 0, 999999.99),
            'is_active' => $this->faker->word,
        ];
    }
}
