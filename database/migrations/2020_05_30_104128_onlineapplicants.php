<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Onlineapplicants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlineapplicants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
            $table->string('nationality2');
            $table->string('present_adress');
            $table->string('present_tel');
            $table->string('present_mobile');
            $table->string('permanent_address');
            $table->string('perm_tel');
            $table->string('perm_mobile');
            $table->string('student_email');
            $table->string('father_occupation');
            $table->string('fbusiness_address');
            $table->string('father_tel');
            $table->string('father_mobile');
            $table->string('father_email');
            $table->string('applicant_designation');
            $table->string('organisation_name');
            $table->string('disability');
            $table->string('special_arrangement');
            $table->string('emergency_name');
            $table->string('relation_applicant');
            $table->string('em_telephone');
            $table->string('em_mobile');
            $table->string('em_address');
            $table->string('username');
            $table->string('password');
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
        Schema::dropIfExists('onlineapplicants');
    }
}
