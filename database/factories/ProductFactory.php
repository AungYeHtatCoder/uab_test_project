<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => $this->faker->name,
            'category_id' => $this->faker->randomNumber(),
            'brand_id' => $this->faker->randomNumber(),
            'product_price' => $this->faker->word,
            'product_old_price' => $this->faker->word,
            'product_quantity' => $this->faker->word,
            'product_description' => $this->faker->text,
            //'product_image' => $this->faker->word,
            // product_image with urlImage
            'product_image' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker'), 
        ];
    }
}