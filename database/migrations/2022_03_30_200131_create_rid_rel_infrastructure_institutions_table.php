<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRidRelInfrastructureInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rid_rel_infrastructure_institutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_infrastructure')->references('id')->on('rid_infrastructures')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->integer('id_institution')->references('id')->on('rid_institutions')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('rid_rel_infrastructure_institutions');
    }

}
