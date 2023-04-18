<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRidInfrastructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rid_infrastructures', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_infrastructure')->nullable();
            $table->string('name_infrastructure');
            $table->string('id_country')->nullable();
            $table->string('id_category')->nullable();
            $table->string('type')->nullable();
            $table->integer('year_built')->nullable();
            $table->integer('year_last_refit')->nullable();
            $table->decimal('length', 18, 2)->nullable();
            $table->decimal('max_operating_depth', 18, 2)->nullable();
            $table->string('contact_person')->nullable();
            $table->string('email')->nullable();
            $table->string('id_relationWithInfrastructure')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->longtext('access_conditions')->nullable();
            $table->longtext('data_examples')->nullable();
            $table->longtext('url_infrastructure')->nullable();
            $table->double('x')->nullable();
            $table->double('y')->nullable();
            $table->string('location')->nullable();
            $table->longtext('services_offered')->nullable();
            $table->date('last_update')->nullable();
            $table->string('id_status_act')->nullable();
            $table->boolean('isConfirmed')->nullable();
            $table->string('editOriginalID')->nullable();
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
        Schema::dropIfExists('rid_infrastructures');
    }
}
