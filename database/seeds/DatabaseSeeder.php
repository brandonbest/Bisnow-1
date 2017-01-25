<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NewsItemTableSeeder::class);
        $this->call(EventItemTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
    }
}
