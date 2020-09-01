<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student__programs', function (Blueprint $table) {
            $table->id();
            $table->integer('formno');
            $table->string('campus')->nullable();
            $table->string('registration_no')->nullable();
            $table->string('pre_program')->nullable();
            $table->string('reason_leaving')->nullable();
            $table->string('institution_attended')->nullable();
            $table->string('cgpa')->nullable();
            $table->string('credit_hours')->nullable();
            $table->string('program')->nullable();
            $table->string('tr_reason_leaving')->nullable();
            $table->string('awaiting_result')->nullable();
            $table->string('board_university')->nullable();
            $table->string('roll_number')->nullable();
            $table->string('year')->nullable();
            $table->string('disciplinary_issue')->nullable();
            $table->string('disciplinary_details')->nullable();
            $table->string('how_did_come')->nullable();
            $table->string('student_status');
            $table->string('semester');
            $table->integer('program1');
            $table->integer('program2')->nullable();
            $table->integer('program3')->nullable();
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
        Schema::dropIfExists('student__programs');
    }
}
