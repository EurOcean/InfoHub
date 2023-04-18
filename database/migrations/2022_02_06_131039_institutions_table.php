<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('countryID');
            // $table->integer('countryID')->unsigned();
            // $table->foreignId('countryID')->references('id')->on('countries');
            // $table->unsignedBigInteger('countryID');
            // $table->foreign('countryID')->references('id')->on('countries');
            // $table->foreignId('countryID')->constrained('countries');
            $table->string('name')->nullable();
            $table->string('institution_acronym')->nullable();
            $table->string('webpage')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->date('created')->nullable();
            $table->string('createdBy')->nullable();
            $table->date('lastUpdt')->nullable();
            $table->string('lastUpdtBy')->nullable();
            $table->string('email')->nullable();
            $table->string('typeID')->nullable();
            $table->string('nativeName')->nullable();
            $table->string('nativeAcronym')->nullable();
            $table->string('address')->nullable();
            $table->string('zipCode')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('url')->nullable();
            $table->string('RID_id')->nullable();
            $table->string('id_1')->nullable();
            $table->string('id_2')->nullable();
            $table->string('id_3')->nullable();
            $table->string('id_4')->nullable();
            $table->string('id_5')->nullable();
            $table->decimal('funding', 15, 2)->nullable();
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
        Schema::dropIfExists('institutions');
    }
}
