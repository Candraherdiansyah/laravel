<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title' => 'Tips Cepat Nikah', 'content' => 'lorem ipsum'],
            ['title' => 'Haruskah Menunda Nikah?', 'content' => 'lorem ipsum'],
            ['title' => 'Membangun Visi Misi Keluarga', 'content' => 'lorem ipsum'],
        ];

        // memasukkan data dari variabel "$posts" ke dalam tabel 'posts' database
        DB::table('posts')->insert($posts);
        $this->command->info('Data Post  has been filled!');
    }
}
