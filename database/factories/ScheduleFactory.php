<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject_id' => \App\Models\Subject::factory(),
            'day' => $this->faker->randomElement(['Senin','Selasa','Rabu','Kamis','Jumat']),
            'start_time' => $this->faker->randomElement(['07:00','08:00','09:00','10:00','11:00','12:00','13:00','14:00','15:00']),
            'end_time' => $this->faker->randomElement(['09:00','10:00','11:00','12:00','13:00','14:00','15:00']),
            'room' => $this->faker->randomElement(['A1','A2','A3','A4','A5']),
            'scan_qrcode' => $this->faker->randomElement(['A1','A2','A3','A4','A5']),
            'academic_year' => $this->faker->randomElement(['2021/2022','2023/2024','2025/2026']),
            'semester' => $this->faker->randomElement(['Ganjil','Genap']),
            'created_by' => \App\Models\User::factory(),
            'updated_by' => \App\Models\User::factory(),
        ];
    }
}
