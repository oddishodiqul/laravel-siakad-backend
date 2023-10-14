<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Khs>
 */
class KhsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => \App\Models\User::factory(),
            'subject_id' => \App\Models\Subject::factory(),
            'value' => $this->faker->randomElement(['50','60','70','80','90','100']),
            'grade' => $this->faker->randomElement(['A','B','C','D','E']),
            'notes' => $this->faker->randomElement(['Lulus','Tidak Lulus']),
            'academic_year' => $this->faker->randomElement(['2021/2022','2022/2023','2023/2024']),
            'semester' => $this->faker->randomElement(['Ganjil','Genap']),
            'created_by' => \App\Models\User::factory(),
            'updated_by' => \App\Models\User::factory(),
        ];
    }
}
