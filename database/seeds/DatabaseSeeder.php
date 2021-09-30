<?php

use Illuminate\Database\Seeder;
use App\Graduate;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Graduate::class, 5)->create()->each(function ($graduate) {
            $graduate->graduate_degrees()->save(factory(App\GraduateDegree::class)->make());
        });
    }
}
