<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->sentence,
            'short_description' => $this->faker->text(150),
            'content' => $this->faker->paragraph(20),
            'created_at' => $this->faker->dateTimeThisMonth(),
            'modified_at' => $this->faker->dateTimeThisMonth(),
            'published_at' => $this->faker->dateTimeThisMonth(),
            'seo_title' => $this->faker->title(),
            'seo_description' => $this->faker->text(150),
            'slug' => $this->faker->unique()->name(),
            'users_id' => rand(1, 20),
            'categories_id' => rand(1, 20),
            'images_id' => rand(1, 20),
        ];
    }
}
