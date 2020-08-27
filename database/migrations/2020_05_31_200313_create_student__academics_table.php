<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student__academics', function (Blueprint $table) {
            $table->id();
            $table->integer('formno');
            $table->string('qualification')->nullable();
            $table->string('board_university')->nullable();
            $table->string('year')->nullable();
            $table->string('division')->nullable();
            $table->string('grade')->nullable();
            $table->string('obtain_marks')->nullable();
            $table->string('total_marks')->nullable();
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
        Schema::dropIfExists('student__academics');
    }
}
