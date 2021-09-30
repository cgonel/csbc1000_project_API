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
            $table->id();
            $table->index('graduate_id');
            $table->unsignedBigInteger('graduate_id');
            $table->index('degree_name_id');
            $table->unsignedBigInteger('degree_name_id');
            $table->index('school_name_id');
            $table->unsignedBigInteger('school_name_id');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('graduate_degrees');
        Schema::enableForeignKeyConstraints();
    }
}
