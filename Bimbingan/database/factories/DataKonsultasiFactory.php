<?php

namespace Database\Factories;

use App\Models\DataKonsultasi;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataKonsultasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataKonsultasi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word,
        'nim' => $this->faker->word,
        'tgk_konsultasi' => $this->faker->word,
        'hasil_konsultasi' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
