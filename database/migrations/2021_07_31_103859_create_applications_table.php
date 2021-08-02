<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('child_name');
            $table->string('sex');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->bigInteger('id_number');
            $table->string('level');
            $table->string('child_inclinations');
            $table->string('father_profession');
            $table->string('academic_qualification_dad');
            $table->string('mother_name');
            $table->string('mother_profession');
            $table->string('academic_qualification_mom');
            $table->string('parents_marital_status');
            $table->string('The_arrangement_of_the_child_in_the_family');
            $table->bigInteger('phone_number');
            $table->string('The_person_authorized_to_accompany_the_child_in_the_emergency');
            $table->string('full_address');
            $table->string('problem_patiant');
            $table->string('taking_medication');
            $table->string('accidant');
            $table->string('movment_disorders');
            $table->string('bathroom_remember');
            $table->string('self_relinat_bathroom');
            $table->string('behavioral_problems');
            $table->string('need_transportation');
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
        Schema::dropIfExists('applications');
    }
}
