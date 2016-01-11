<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies',function(Blueprint $table){
            $table->increments('id');
            $table->string('company_name',32);
            $table->text('description');
            $table->string('owner_name',32);
            $table->string('mobile',15);
            $table->string('facebook',60);
            $table->string('twitter',60);
            $table->integer('company_type_id')->unsigned();
            $table->timestamps();

            $table->foreign('company_type_id')
                ->references('id')
                ->on('company_types')
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
        Schema::drop('companies');
    }
}
