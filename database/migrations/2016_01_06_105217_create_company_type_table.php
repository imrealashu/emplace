<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_types',function(Blueprint $table){
            $table->increments('id');
            $table->string('type',32);
        });

        DB::table('company_types')->insert([
            'type' => 'Restaurant'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company_types');
    }
}
