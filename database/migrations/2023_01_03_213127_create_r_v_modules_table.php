<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRVModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_v_modules', function (Blueprint $table) {
            $table->id();
            $table->integer('id_rvmodule')->references('id_infrastructure')->on('rid_institutions')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->string('ices_shipcode')->nullable();
            $table->string('mmsi')->nullable();
            $table->string('imo')->nullable();
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
        Schema::dropIfExists('r_v_modules');
    }
}
