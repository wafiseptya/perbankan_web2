<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name'      => 'Hanif Wafi S',
            'username'  => 'admin',
            'password'  => bcrypt('secret'),
            'role'      => 'admin',
            'avatar'    => '/images/ava1.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'name'      => 'Rizky Kurniawan',
            'username'  => 'teller',
            'password'  => bcrypt('secret'),
            'role'      => 'teller',
            'avatar'    => '/images/ava2.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'name'      => 'Andri Fritzent',
            'username'  => 'cs',
            'password'  => bcrypt('secret'),
            'role'      => 'cs',
            'avatar'    => '/images/ava3.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        
    }
}
