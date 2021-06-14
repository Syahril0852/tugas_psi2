<?php

namespace Database\Factories;

use App\Models\DataDosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataDosenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataDosen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word,
        'jenis_kelamin' => $this->faker->word,
        'agama' => $this->faker->word,
        'prodi_id' => $this->faker->randomDigitNotNull,
        'jurusan_id' => $this->faker->randomDigitNotNull,
        'no_telp' => $this->faker->word,
        'email' => $this->faker->word,
        'status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
