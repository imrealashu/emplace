<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table){
            $table->increments('id');
            $table->string('name',32);
            $table->string('code',2);
            $table->string('dial_code',8);
        });
        DB::table('countries')->insert([
            'name' => 'India',
            'code' => 'IN',
            'dial_code' => '+91'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('countries');
    }
}