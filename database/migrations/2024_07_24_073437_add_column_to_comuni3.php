<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToComuni3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_comuni', function (Blueprint $table) {
            //
            $table->boolean("sepoltura")->default(0);
            $table->boolean("accesso_atti")->default(0);
            $table->boolean("richiesta_occupazione_suolo")->default(0);
            $table->boolean("paga_contravvenzioni")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_comuni', function (Blueprint $table) {
            //
        });
    }
}
