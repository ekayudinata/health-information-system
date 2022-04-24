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
            // $table->string('medic_record_number');
            // $table->foreignId('patient_action_id');   
            // $table->foreignId('administration_id');
            // $table->string('description');
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
