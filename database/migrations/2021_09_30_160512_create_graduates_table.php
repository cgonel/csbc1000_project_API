<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduates', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('address');
            $table->string('phoneno');
            $table->foreignId('graduate_degrees_id');
            // $table->string('Associate_degree');
            // $table->string('Associate_school');
            // $table->string('UG_degree');
            // $table->string('UG_school');
            // $table->string('PG_degree');
            // $table->string('PG_school');
            $table->uuid('userHash');
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
        Schema::dropIfExists('graduates');
        Schema::enableForeignKeyConstraints();
    }
}
