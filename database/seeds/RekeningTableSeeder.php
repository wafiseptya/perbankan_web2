<?php

use Illuminate\Database\Seeder;

class RekeningTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker
        $limit = 15; //batasan berapa banyak data
        $norek = 63100101000;
        
        for ($i = 1; $i <= $limit; $i++) {
            DB::table('rekening')->insert([
                'saldo' => $faker->numberBetween($min = 1000000, $max = 100000000),
                'created_at' => $faker->dateTimeThisYear($max = 'now'),
                'pin' => bcrypt('111111'),
                'no_rekening' => $norek + $i,
                'updated_at' => $faker->dateTimeThisMonth($max = 'now'),
                'nasabah_id' => $i,
            ]);
        }
    }
}
