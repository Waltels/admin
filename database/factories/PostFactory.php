<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $published=$this->faker->randomElement([true,false]);
        
        return [

            'name'=>$this->faker->word(),
            'description'=>$this->faker->text(200),
            'img_path'=>$this->faker->imageUrl(1280.720),
            'doc_path'=>$this->faker->imageUrl(1280.720),
            'published'=>$published,
            'date'=>$this->faker->date(),
            'category_id'=>rand(1,5)


        ];
    }
}
