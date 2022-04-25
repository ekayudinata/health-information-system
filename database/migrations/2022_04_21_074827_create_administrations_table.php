<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrations', function (Blueprint $table) {
            $table->id();
            $table->enum('service_status', ['Belum Dilayani', 'Dilayani', ' Dibatalkan']);
            $table->enum('payment_status', ['Belum Bayar', 'Lunas']);
            $table->foreignId('patient_id');
            $table->foreignId('clinic_id');
            $table->foreignId('poli_id');
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
        Schema::dropIfExists('administrations');
    }
}
