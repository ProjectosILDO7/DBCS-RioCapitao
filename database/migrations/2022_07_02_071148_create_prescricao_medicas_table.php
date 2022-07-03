<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescricaoMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescricao_medicas', function (Blueprint $table) {
            $table->id();
            $table->string('paciente');
            $table->string('data_nasc');
            $table->string('genero');
            $table->string('telemovel');
            $table->string('endereco');
            $table->text('presc_medica');
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
        Schema::dropIfExists('prescricao_medicas');
    }
}
