<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToComuni extends Migration
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
            $table->string("cellulare");
            $table->string("smtp_host");
            $table->string("smtp_port");
            $table->string("smtp_user");
            $table->string("smtp_psw");
            $table->boolean("instanza_previo_colloquio")->default(0);
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
