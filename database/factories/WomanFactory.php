<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Woman>
 */
class WomanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake('vi_VN')->unique()->name(),
            'biography' => fake('vi_VN')->unique()->text(),
            'field_of_work' => fake('vi_VN')->unique()->text(),
            'image' => fake('vi_VN')->unique()->url(),
            'birth_date' => fake('vi_VN')->unique()->date('Y-m-d', 'now'),
        ];
    }
}
