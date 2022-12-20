<?php

namespace Database\Seeders;


use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $train = new train();
            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->date();
            $train->orario_di_arrivo = $faker->date();
            $train->codice_treno = $faker->numberBetween(1, 100);
            $train->numero_carrozze = $faker->randomDigitNotNull();
            $train->save();
            // dd($train);
        }
    }
}
