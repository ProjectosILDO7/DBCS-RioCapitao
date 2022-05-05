<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisponibMedicoConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponib_medico_consultas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medico_id')->constrained('disponib_medico_consultas');
            $table->string('medico');
            $table->string('data_dispon');
            $table->string('especialidade');
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
        Schema::dropIfExists('disponib_medico_consultas');
    }
}
