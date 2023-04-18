<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRidKgMergesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rid_kg_merges', function (Blueprint $table) {
            $table->id();
            $table->string('id_institution')->nullable();
            $table->string('id_kg')->nullable();
            $table->string('picNumber')->nullable();
            $table->string('vatNumber')->nullable();
            $table->string('name')->nullable();
            $table->string('shortName')->nullable();
            $table->string('activityType')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('postCode')->nullable();
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
        Schema::dropIfExists('rid_kg_merges');
    }
}
