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
                'food' => 3,
                'ambiance' => 4,
                'service' => 4,
                'no_of_people' => 5,
                'bill_amount' => 4332.4,
                'comment' => 'lauda lasun na karo betichod',
                'user_id' => 1,
                'branch_id' => 1,
            ],
            [
                'food' => 2,
                'ambiance' => 3,
                'service' => 4,
                'no_of_people' => 5,
                'bill_amount' => 4332.4,
                'comment' => 'lauda lasun na karo betichod',
                'user_id' => 1,
                'branch_id' => 2,
            ],
            [
                'food' => 3,
                'ambiance' => 4,
                'service' => 4,
                'no_of_people' => 5,
                'bill_amount' => 4332.4,
                'comment' => 'lauda lasun na karo betichod',
                'user_id' => 1,
                'branch_id' => 1,
            ],
            [
                'food' => 2,
                'ambiance' => 4,
                'service' => 3,
                'no_of_people' => 5,
                'bill_amount' => 4332.4,
                'comment' => 'lauda lasun na karo betichod',
                'user_id' => 1,
                'branch_id' => 1,
            ],
            [
                'food' => 4,
                'ambiance' => 3,
                'service' => 2,
                'no_of_people' => 5,
                'bill_amount' => 4332.4,
                'comment' => 'lauda lasun na karo betichod',
                'user_id' => 2,
                'branch_id' => 1,
            ],
            [
            'food' => 1,
            'ambiance' => 1,
            'service' => 1,
            'no_of_people' => 5,
            'bill_amount' => 4332.4,
            'comment' => 'lauda lasun na karo betichod',
            'user_id' => 2,
            'branch_id' => 1,
             ],
            [
                'food' => 4,
                'ambiance' => 1,
                'service' => 4,
                'no_of_people' => 5,
                'bill_amount' => 4332.4,
                'comment' => 'lauda lasun na karo betichod',
                'user_id' => 2,
                'branch_id' => 1,
            ],
            [
                'food' => 1,
                'ambiance' => 4,
                'service' => 3,
                'no_of_people' => 5,
                'bill_amount' => 4332.4,
                'comment' => 'lauda lasun na karo betichod',
                'user_id' => 2,
                'branch_id' => 1,
            ]
        ]);
    }
}
