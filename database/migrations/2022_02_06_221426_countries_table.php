<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('continentID')->nullable();
            $table->string('code')->nullable();
            $table->string('country_name')->nullable();
            $table->string('isEU')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->date('created');
            $table->integer('createdBy');
            $table->date('LastUpdt')->nullable();
            $table->string('lastUpdBy')->nullable();
            $table->string('RID_id')->nullable();
            $table->string('id_1')->nullable();
            $table->string('id_2')->nullable();
            $table->string('id_3')->nullable();
            $table->string('id_4')->nullable();
            $table->string('id_5')->nullable();
            $table->string('various');
            $table->string('HIDE_ON_FILTERS')->nullable();
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
        Schema::dropIfExists('countries');
    }
}
