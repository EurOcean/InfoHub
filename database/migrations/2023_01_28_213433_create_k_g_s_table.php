<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKGSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k_g_s', function (Blueprint $table) {
            $table->id();
            $table->string('picNumber')->nullable();
            $table->integer('id_kg')->nullable();
            // $table->integer('organizationID')->references('id_institution')->on('rid_institutions')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->string('vatNumber')->nullable();
            $table->string('name')->nullable();
            $table->string('shortName')->nullable();
            $table->string('activityType')->nullable();
            $table->string('street')->nullable();
            $table->string('postCode')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('geolocation')->nullable();
            $table->string('organizationURL')->nullable();
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
        Schema::dropIfExists('k_g_s');
    }
}
