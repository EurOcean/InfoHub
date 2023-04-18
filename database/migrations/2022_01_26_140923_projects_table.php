<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('@id')->nullable();
            $table->string('source_ID')->nullable();
            $table->integer('RID')->nullable();
            $table->string('contractNumber')->nullable();
            $table->string('acronym')->nullable();
            $table->string('title')->nullable();
            $table->foreignId('programmeID')->nullable();
            // $table->foreignId('programmeID')->references('id')->on('programmers')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->decimal('projectFunding', 15, 2)->nullable();
            $table->longText('summary')->nullable();
            $table->string('webSite')->nullable();
            $table->longText('informationSource');
            $table->string('onlineStatus')->nullable();
            $table->longText('adminNotes')->nullable();
            $table->date('created')->nullable();
            $table->integer('createdBy')->nullable();
            $table->date('lastUpdt')->nullable();
            $table->foreignId('lastUpdtBy')->nullable();
            $table->string('contactPerson')->nullable();
            $table->integer('descriptor1ID')->nullable();
            $table->integer('descriptor2ID')->nullable();
            $table->integer('descriptor3ID')->nullable();
            $table->integer('descriptor4ID')->nullable();
            $table->string('url_finalReport')->nullable();
            $table->string('coordinatorEmail')->nullable();
            $table->string('eurOceanRIDProject')->nullable();
            $table->integer('startYear')->nullable();
            $table->integer('endYear')->nullable();
            $table->timestamps();

            // $table->unsignedBigInteger('programmeID');
            // $table->foreign('programmeID')->references('id')->on('programmers')->onDelete('cascade');

            // $table->integer('programmeID')->unsigned();
            // $table->foreignId('programmeID')->references('id')->on('programmers')->cascadeOnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
