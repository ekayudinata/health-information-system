<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medic_records', function (Blueprint $table) {
            $table->id();
            $table->string('medic_record_number');
            $table->string('main_complaint');
            $table->string('allergy');
            $table->string('past_medical_history');
            $table->string('treatment_so_far');
            $table->string('medical_history');
            $table->string('level_of_consciousness');
            $table->string('respiration');
            $table->string('blood_pressure');
            $table->string('temperature');
            $table->string('pulse');
            $table->string('o2_saturation');
            $table->string('general_appearance');
            $table->string('eye');
            $table->string('ear');
            $table->string('nose');
            $table->string('throat');
            $table->string('tonsil');
            $table->string('heart');
            $table->string('lungs');
            $table->string('stomach');
            $table->string('extrimitas');
            $table->string('localist_status');
            $table->string('random_blood_glucose');
            $table->string('height');
            $table->string('weight');
            $table->string('patient_action_id');
            $table->string('management_and_procedures');
            $table->string('diagnostic_information');
            $table->string('treatment_and_dosage');
            $table->string('recommendation');
            $table->string('color blind');
            $table->string('fit_to_flay');
            $table->string('additional_data');
            $table->foreignId('administration_id');
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
        Schema::dropIfExists('medic_records');
    }
}
