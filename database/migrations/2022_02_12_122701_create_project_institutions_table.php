<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_institutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projectID')->references('id')->on('projects')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('institutionID')->references('id')->on('institutions')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('partnershipID')->references('id')->on('partnerships')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->decimal('contribution', 10, 2)->nullable();
            $table->date('created')->nullable();
            $table->integer('createdBy')->nullable();
            $table->date('lastUpdt')->nullable();
            $table->integer('lastUpdtBy')->nullable();
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
        Schema::dropIfExists('project_institutions');
    }
}
