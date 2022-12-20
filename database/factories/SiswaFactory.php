<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;



use Illuminate\Support\Str;

class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_siswa' => $this->faker->unique()->name(),
            'tempat' => $this->faker->name(),
            'tgl_lahir' => $this->faker->name(),
            'alamat' => $this->faker->name(),
            'hanphone'  => Str::random(10),
            'jk'  => Str::random(1),
            'id_kelas'  => Str::random(1),
            'id_absen'  => Str::random(1)
            // $table->integer('id_kelas', 20);
            // $table->integer('id_sekolah', 20);

        ];
    }
}
