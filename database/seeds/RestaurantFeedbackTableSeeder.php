<?php

use Illuminate\Database\Seeder;

class RestaurantFeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurant_feedbacks')->insert([
            [
                'food' => 75,
                'ambiance' => 100,
                'service' => 100,
                'no_of_people' => 5,
                'bill_amount' => 4332.4,
                'comment' => 'lauda lasun na karo betichod',
                'user_id' => 1,
                'branch_id' => 1,
            ],
            [
                'food' => 50,
                'ambiance' => 75,
                'service' => 100,
                'no_of_people' => 5,
                'bill_amount' => 4332.4,
                'comment' => 'lauda lasun na karo betichod',
                'user_id' => 1,
                'branch_id' => 2,
            ],
            [
                'food' => 75,
                'ambiance' => 100,
                'service' => 100,
                'no_of_people' => 5,
                'bill_amount' => 4332.4,
                'comment' => 'lauda lasun na karo betichod',
                'user_id' => 1,
                'branch_id' => 1,
            ],
            [
                'food' => 50,
                'ambiance' => 100,
                'service' => 75,
                'no_of_people' => 5,
                'bill_amount' => 4332.4,
                'comment' => 'lauda lasun na karo betichod',
                'user_id' => 1,
                'branch_id' => 1,
            ],
            [
                'food' => 100,
                'ambiance' => 75,
                'service' => 50,
                'no_of_people' => 5,
                'bill_amount' => 4332.4,
                'comment' => 'lauda lasun na karo betichod',
                'user_id' => 2,
                'branch_id' => 1,
            ],
            [
            'food' => 25,
            'ambiance' => 25,
            'service' => 25,
            'no_of_people' => 5,
            'bill_amount' => 4332.4,
            'comment' => 'lauda lasun na karo betichod',
            'user_id' => 2,
            'branch_id' => 1,
             ],
            [
                'food' => 100,
                'ambiance' => 25,
                'service' => 100,
                'no_of_people' => 5,
                'bill_amount' => 4332.4,
                'comment' => 'lauda lasun na karo betichod',
                'user_id' => 2,
                'branch_id' => 1,
            ],
            [
                'food' => 25,
                'ambiance' => 100,
                'service' => 75,
                'no_of_people' => 5,
                'bill_amount' => 4332.4,
                'comment' => 'lauda lasun na karo betichod',
                'user_id' => 2,
                'branch_id' => 1,
            ]
        ]);
    }
}
