<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompanyIdColumnToClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function(Blueprint $table){
            $table->integer('company_id')->unsigned()->after('password');

            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
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
        Schema::table('clients',function(Blueprint $table){
            $table->dropForeign('clients_company_id_foreign');
            $table->dropColumn('company_id');
        });
    }
}
