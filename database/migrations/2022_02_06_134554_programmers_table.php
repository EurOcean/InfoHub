<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProgrammersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('programmeTypeID');
            $table->foreignId('programmeLevelID');
            $table->string('name')->nullable();
            $table->string('acronym')->nullable();
            $table->string('description')->nullable();
            $table->string('webpage')->nullable();
            $table->date('created')->nullable();
            $table->integer('createdBy')->nullable();
            $table->date('lastUpdt')->nullable();
            $table->string('lastUpdtBy')->nullable();
            $table->integer('countryID')->nullable();
            $table->string('RID_id')->nullable();
            $table->string('id_1')->nullable();
            $table->string('id_2')->nullable();
            $table->string('id_3')->nullable();
            $table->string('id_4')->nullable();
            $table->string('id_5')->nullable();
            $table->longText('richTextContent1')->nullable();
            $table->longText('richTextContent2')->nullable();
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
        Schema::dropIfExists('programmers');
    }
}
