<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Sameer Kochak',
                'email' => 'sameer@kochak.com',
                'password' => bcrypt('password'),
                'country_id' => 1,
                'phone' => 9002471380,
                'anniversary' => \Carbon\Carbon::now(),
                'dob' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Sameer Chutiya',
                'email' => 'sameer@chutiya.com',
                'password' => bcrypt('password'),
                'country_id' => 1,
                'phone' => 9002471381,
                'anniversary' => \Carbon\Carbon::now(),
                'dob' => \Carbon\Carbon::now()
            ]
        ]);
    }
}
