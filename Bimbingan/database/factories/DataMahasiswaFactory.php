<?php

namespace Database\Factories;

use App\Models\DataMahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataMahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataMahasiswa::class;

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
        'agama' => $this->faker->word,
        'jenis_kelamin' => $this->faker->word,
        'semester' => $this->faker->word,
        'prodi_id' => $this->faker->randomDigitNotNull,
        'jurusan_id' => $this->faker->randomDigitNotNull,
        'no_telp' => $this->faker->word,
        'email' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
