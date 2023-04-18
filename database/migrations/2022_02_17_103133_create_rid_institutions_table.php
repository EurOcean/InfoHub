<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRidInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rid_institutions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_institution')->nullable();
            $table->string('old_rid_id')->nullable();
            $table->string('edmo_id')->nullable();
            $table->string('kg_id')->nullable();
            $table->string('id_country')->nullable();
            $table->string('id_status_institution')->nullable();
            $table->string('institution_name')->nullable();
            $table->string('acronym_inEnglish')->nullable();
            $table->string('institution_name_inEnglish')->nullable();
            $table->string('institution_name_native')->nullable();
            $table->string('street')->nullable();
            $table->string('postCode')->nullable();
            $table->string('city')->nullable();
            $table->string('website')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
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
        Schema::dropIfExists('rid_institutions');
    }
}
