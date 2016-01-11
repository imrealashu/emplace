<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'company_name' => 'Balle Balle Dhaba',
            'description' => 'Balle Balle Dhaba is one of the most fucking awesome pussy serving restaurant in India.',
            'owner_name' => 'Son of Sardar',
            'mobile' => '9002471380',
            'facebook' => 'http://facebook.com/balle-balle-dhaba',
            'twitter' => 'http://twitter.com/bbd',
            'company_type_id'=>1,
        ]);
    }
}
