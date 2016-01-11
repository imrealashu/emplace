<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Sardar Singh',
            'email' => 'imrealashu@gmail.com',
            'password' => bcrypt('ashish'),
            'company_id'=>1,
        ]);
    }
}
