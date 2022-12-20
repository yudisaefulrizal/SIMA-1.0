<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Absen;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'buku',
            'slug' => 'buku'
        ]);
        Post::factory(20)->create();

        User::create([
            'name' => 'Yudi Saeful Rizal',
            'username' => 'yudisaefulrizal',
            'email' => 'yudi@gmail.com',
            'password' => bcrypt('12345')
        ]);
        Absen::create([
            'absen' => '17',
            ]);
            Kelas::create([
                'kelas' => '8a',
                ]);
                Absen::create([
                    'absen' => '19',
                    ]);
                    Kelas::create([
                        'kelas' => '8b',
                        ]);

       Siswa::create([
       'nama_siswa' => 'yudi',
       'tempat' => 'bogor',
       'tgl_lahir' => '2022-11-01',
       'alamat' =>'budi asih',
       'hanphone'  => '085673131178',
       'jk'  => 'laki laki',
       'id_kelas'  => '1',
       'id_absen'  => 1 
       ]);
       Siswa::create([
        'nama_siswa' => 'saeful',
        'tempat' => 'bogor',
        'tgl_lahir' => '2022-11-01',
        'alamat' =>'budi asih',
        'hanphone'  => '085673131178',
        'jk'  => 'laki laki',
        'id_kelas'  => '1',
        'id_absen'  => 1 
        ]);
       Siswa::create([
        'nama_siswa' => 'rizal',
        'tempat' => 'bogor',
        'tgl_lahir' => '2022-11-01',
        'alamat' =>'budi asih',
        'hanphone'  => '085673131178',
        'jk'  => 'laki laki',
        'id_kelas'  => '2',
        'id_absen'  => 2 
        ]);
        Siswa::create([
            'nama_siswa' => 'ys',
            'tempat' => 'bogor',
            'tgl_lahir' => '2022-11-01',
            'alamat' =>'budi asih',
            'hanphone'  => '085673131178',
            'jk'  => 'laki laki',
            'id_kelas'  => '2',
            'id_absen'  => 2 
            ]);
        // Post::create([
        //     'title' => 'judul kedua',
        //     'category_id' => '2',
        //     'slug' => 'judul-kedua',
        //     'excerp' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, reiciendis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eos tempore ipsa! Repellat consequuntur nobis possimus impedit fuga atque, maiores voluptatum consectetur, magnam doloribus voluptatibus incidunt amet, perspiciatis nulla placeat? Architecto dicta unde possimus veritatis beatae corrupti expedita itaque mollitia eius adipisci, quia recusandae excepturi facilis suscipit fugit quam error.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // User::create([
        //     'name' => 'l Rizal',
        //     'email' => 'dsfds@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        // Post::create([
        //     'title' => 'judul tiga',

        //     'slug' => 'judul-ketiga',
        //     'excerp' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, reiciendis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eos tempore ipsa! Repellat consequuntur nobis possimus impedit fuga atque, maiores voluptatum consectetur, magnam doloribus voluptatibus incidunt amet, perspiciatis nulla placeat? Architecto dicta unde possimus veritatis beatae corrupti expedita itaque mollitia eius adipisci, quia recusandae excepturi facilis suscipit fugit quam error.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
