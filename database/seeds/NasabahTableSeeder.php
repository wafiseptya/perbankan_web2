<?php

use Illuminate\Database\Seeder;

class NasabahTableSeeder extends Seeder
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
        
        for ($i = 0; $i < $limit; $i++) {
            DB::table('nasabah')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->streetAddress,
                'birth_place' => $faker->state,
                'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'post_code' => $faker->postcode,
                'phone' => $faker->e164PhoneNumber,
                'ibu_kandung' => $faker->name($gender = 'female'),
                'pendapatan' => $faker->randomElement($array = array ('value1','value2','value3','value4')),
                'pengeluaran' => $faker->randomElement($array = array ('value1','value2','value3','value4')),
                'created_at' => $faker->dateTimeThisYear($max = 'now'),
                'updated_at' => $faker->dateTimeThisMonth($max = 'now'),
            ]);
        }
    }
}
