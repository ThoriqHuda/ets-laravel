<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Riwayat>
 */
class RiwayatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pasien_id' => mt_rand(1,3),
            'dokter_id' => mt_rand(1,3),
            'condition' => $this->faker->paragraph(),
            'temperature' => $this->faker->randomFloat(3,35,45.5),
            'image' =>$this->faker->text()
        ];
    }
}
