<?php

namespace Database\Factories;

use App\Models\Category;
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
        return [
            'name' => $this->faker->text(15),
            'created_at' => $this->faker->dateTimeThisMonth(),
            'updated_at' => $this->faker->dateTimeThisMonth(),
            'slug' => $this->faker->unique()->name(),
            'seo_title' => $this->faker->title(),
            'seo_description' => $this->faker->text(150),
            'image' => 'article.jpg',
            /* 'parent_categories_id' => rand(0, 20),  */   
        ];
    }
}
