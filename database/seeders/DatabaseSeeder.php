<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Breeds;
use App\Models\Dogs;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Breeds::factory()->count(3)->sequence(
            ['name' => 'Great Dane'],
            ['name' => 'Mixed'],
            ['name' => 'Beagle']
        )->create();

        Dogs::factory()->count(4)->sequence(
            ['breed_id' => 2, 'name' => 'Courage', 'image' => 'https://static.wikia.nocookie.net/courage/images/4/46/New_Courage.png'],
            ['breed_id' => 1, 'name' => 'Scooby Doo', 'image' => 'https://static.wikia.nocookie.net/warner-bros-entertainment/images/5/53/Scooby-Doo.png'],
            ['breed_id' => 3, 'name' => 'Snoopy', 'image' => 'https://static.wikia.nocookie.net/peanuts/images/3/3e/Snoopytrans.png'],
            ['breed_id' => 2, 'name' => 'Laika', 'image' => 'https://static.wikia.nocookie.net/laika/images/d/d5/Laika.jpeg']
        )->create();
    }
}
