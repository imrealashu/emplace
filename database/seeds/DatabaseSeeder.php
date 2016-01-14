<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanyTableSeeder::class);
        $this->call(BranchTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RestaurantFeedbackTableSeeder::class);
    }
}
