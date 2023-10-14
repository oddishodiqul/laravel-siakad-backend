<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Presence>
 */
class PresenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'schedule_id' => \App\Models\Schedule::factory(),
            'student_id' => \App\Models\User::factory(),
            'code' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{3}'),
            'academic_year' => $this->faker->randomElement(['2021/2022','2022/2023','2023/2024']),
            'semester' => $this->faker->randomElement(['Ganjil','Genap']),
            'meeting' => $this->faker->randomElement(['1','2','3','4','5','6','7','8','9','10']),
            'status' => $this->faker->randomElement(['Hadir','Tidak Hadir']),
            'notes' => $this->faker->randomElement(['Sakit','Izin','Tanpa Keterangan']),
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'task' => $this->faker->randomElement(['50','60','70','80','90','100']),
            'created_by' => \App\Models\User::factory(),
            'updated_by' => \App\Models\User::factory(),
        ];
    }
}
