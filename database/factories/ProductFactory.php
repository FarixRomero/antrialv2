<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(10),
            'brand_id'=>rand(1,4),
            'descripcion' => $this->faker->text(20),
            'price'=>rand(1,100),
            'url_image'=>$this->faker->imageUrl( 50,50),
        ];
    }
}
