<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->integer('formno');
            $table->string('student_cnic');
            $table->string('matric_degree');
            $table->string('inter_degree');
            $table->string('student_photo');
            $table->string('bachelor_degree')->nullable();
            $table->string('master_degree')->nullable();
            $table->string('equivalence_degree')->nullable();
            $table->string('nts_score_sheet')->nullable();
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
        Schema::dropIfExists('uploads');
    }
}
