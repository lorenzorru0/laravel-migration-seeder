<?php

use App\Vacation;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class VacationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 1; $i++) {
            $vacation = new Vacation();
            $vacation->country = $faker->country();
            $departure_date = $faker->dateTimeInInterval('0 days', '+1 year');
            $vacation->departure_date = $departure_date;
            $vacation_days = $faker->numberBetween(4, 12);
            $vacation->arrive_date = $departure_date->modify('+1 day');
            $vacation->time_departure_date = $faker->time('H:i');
            $vacation->time_arrive_date = $faker->time('H:i');
            $price = $faker->numberBetween(399, 1799);
            $vacation->price = $price;
            $vacation->advance_payment =  ($price / 3);
            $vacation->balance = ($price / 3) * 2;
            $vacation->to_bring_in_suitcase = $faker->paragraph(2);
            $vacation->itinerary = $faker->paragraph(4);
            $vacation->includes_in_the_quote = $faker->paragraph(2);
            $vacation->not_includes_in_the_quote = $faker->paragraph(1);
            $vacation->save();
        }
    }
}
