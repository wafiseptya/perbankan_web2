<?php

use Illuminate\Database\Seeder;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker
        $limit = 56; //batasan berapa banyak data
        
        for ($i = 0; $i < $limit; $i++) {
            DB::table('transaksi')->insert([
                'nama'=>$faker->name,
                'nominal' => $faker->numberBetween($min = 1000, $max = 10000000),
                'jenis' => $faker->randomElement($array = array ('tarikan','setoran')),
                'created_at' => $faker->dateTimeThisYear($max = 'now'),
                'updated_at' => $faker->dateTimeThisMonth($max = 'now'),
                'rekening_id' => $faker->numberBetween($min = 1, $max = 15),
            ]);
        }
    }
}
