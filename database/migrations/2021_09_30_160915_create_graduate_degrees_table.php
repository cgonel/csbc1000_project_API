<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduateDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduate_degrees', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->foreignId('degree_name_id');
            $table->foreignId('school_name_id');
            $table->string('year_issued');
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
        Schema::dropIfExists('graduate_degrees');
        Schema::enableForeignKeyConstraints();
    }
}
