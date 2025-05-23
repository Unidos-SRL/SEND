<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblComuni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_comuni', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("address");
            $table->string("fiscal_code");
            $table->string("website_link");
            $table->string("pec");
            $table->string("facebook_link");
            $table->string("instagram_link");
            $table->string("regione");
            $table->boolean("active");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_comuni');
    }
}
