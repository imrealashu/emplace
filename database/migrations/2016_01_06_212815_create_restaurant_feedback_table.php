<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_feedbacks',function(Blueprint $table){
            $table->increments('id');
            $table->integer('food');
            $table->integer('ambiance');
            $table->integer('service');
            $table->integer('no_of_people');
            $table->float('bill_amount');
            $table->text('comment');
            $table->integer('user_id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('branch_id')
                ->references('id')
                ->on('branches')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('restaurant_feedbacks');
    }
}
