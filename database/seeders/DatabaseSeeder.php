<?php

namespace Database\Seeders;

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
        // memanggil data yang akan di kirim ke db
        $this->call(PostsSeeder::class);
        $this->command->info("Sample Data Sudah Terisi");

    }
}
