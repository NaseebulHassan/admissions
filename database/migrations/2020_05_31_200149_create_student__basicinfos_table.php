<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentBasicinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student__basicinfos', function (Blueprint $table) {
            $table->id();
            $table->integer('formno');
            $table->string('student_name');
            $table->string('student_cnic')->unique();
            $table->string('father_name');
            $table->string('father_cnic');
            $table->string('guardian_name');
            $table->string('guardian_cnic');
            $table->string('gender');
            $table->string('martial_status');
            $table->string('domicile_province');
            $table->string('domicile_district');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('nationality1');
            $table->string('nationality2')->nullable();
            $table->string('present_address');
            $table->string('present_tel');
            $table->string('present_mobile');
            $table->string('permanent_address')->nullable();
            $table->string('student_email');
            $table->string('father_occupation')->nullable();
            $table->string('fbusiness_address')->nullable();
            $table->string('father_tel')->nullable();
            $table->string('father_mobile')->nullable();
            $table->string('applicant_designation')->nullable();
            $table->string('organisation_name')->nullable();
            $table->string('disability')->nullable();
            $table->string('special_arrangement')->nullable();
            $table->string('emergency_name')->nullable();
            $table->string('relation_applicant')->nullable();
            $table->string('em_telephone')->nullable();
            $table->string('em_mobile')->nullable();
            $table->string('em_address')->nullable();
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
        Schema::dropIfExists('student__basicinfos');
    }
}
