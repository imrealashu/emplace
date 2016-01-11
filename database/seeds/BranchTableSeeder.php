<?php

use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
            [
                'address' => 'Salt Lake - Sector 1',
                'company_id' => 1,
                'country_id' => 1,
                'city_id' => 1,
                'area_id' => 1,
            ],
            [
                'address' => 'Salt Lake - Sector 2',
                'company_id' => 1,
                'country_id' => 1,
                'city_id' => 1,
                'area_id' => 1,
            ]
        ]);
    }
}
