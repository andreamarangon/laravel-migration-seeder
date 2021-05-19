<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;



class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTravel = new Travel();
            $newTravel->reference = $faker->bothify('??-########');
            $newTravel->address = $faker->streetAddress();
            $newTravel->postal_code = $faker->postcode();
            $newTravel->city = $faker->city();
            $newTravel->state = $faker->state();
            $newTravel->square_meters = $faker->numberBetween(30,100);
            $newTravel->rooms = $faker->numberBetween(30, 100);
            $newTravel->bathrooms = $faker->numberBetween(1, 3);
            $newTravel->type = $faker->randomElement(['monolocale', 'bilocale', 'bungalow']);
            $newTravel->save();
        }
    }
}
