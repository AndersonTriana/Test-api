<?php

use App\Persona;
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
        // $this->call(UserSeeder::class);        
        
        Persona::truncate();

        $faker = \Faker\Factory::create();
    
        for ($i = 0; $i < 50; $i++) {
            Persona::create([
                'Nombre' => $faker->name,
                'Documento' => $faker->phoneNumber
            ]);
        }
    }
}
