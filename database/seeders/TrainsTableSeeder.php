<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    
    public function run(): void
    {
        Train::truncate();

        for ($i = 0; $i < 20; $i++) {
            $train = new Train();

            $train->azienda = fake()->company;
            $train->stazione_partenza = fake()->city;
            $train->stazione_arrivo = fake()->city;

            $dateTimeNow = new \DateTime(); 
            $dateTimeNow->setTime(0, 0, 0);

            $train->orario_partenza = fake()->dateTimeBetween($dateTimeNow, '+6 day');

            $maxInterval = new \DateInterval('PT10H'); 
            $train->orario_arrivo = $train->orario_partenza->add($maxInterval);

            $train->codice_treno = fake()->randomNumber(5, true);
            $train->numero_carrozze = fake()->numberBetween(5, 20);
            $train->in_orario = fake()->boolean;
            $train->cancellato = fake()->boolean;

            $train->save();
        }
    }
}
