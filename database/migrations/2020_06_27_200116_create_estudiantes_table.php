<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->date('fechaNacimiento');
            $table->text('apellido');
            $table->text('nombre');
            $table->text('direccion');
            $table->string('telefono');
            $table->text('barrio');
            $table->string('celular');
            $table->string('email')->unique();
            $table->text('insProveniente');
            $table->text('eps');
            $table->text('ips');
            $table->text('tipoSangre');
            $table->string('noCarnetSisben');
            $table->string('puntajeSisben');
            $table->string('estrato');
            $table->string('idAcudiente')->unique();
            $table->text('apellidoAcudiente');
            $table->text('nombreAcudiente');
            $table->text('paisAcudiente');
            $table->string('direccionAcudiente');
            $table->text('barrioAcudiente');
            $table->text('parentescoAcudiente');
            $table->string('celularAcudiente');
            $table->string('emailAcudiente')->unique();
            $table->date('fechaNacimientoAcudiente');
            $table->text('ocupacionAcudiente');
            $table->text('profecionAcudiente');
            $table->text('direccionEmpresaAcudiente');
            $table->text('nombreEmpresaAcudiente');
            $table->text('cargoEmpresaAcudiente');
            $table->string('telefonoEmpresaAcudiente');
            $table->text('convivenciaAcudiente');
            $table->string('idGeneroAcudiente');
            $table->string('idTipoDocumentoAcudiente');
            $table->string('idDepartamentoExpedicionAcudiente');
            $table->string('idMunicipioExpedicionAcudiente');
            $table->string('idMunicipioAcudiente');
            $table->string('idDepartamentoAcudiente');
            $table->string('idZonaAcudiente');
            $table->string('idEpsPrivadoAcudiente');
            $table->string('idEpsMunicipioAcudiente');
            $table->string('idTipoEmpleoAcudiente');
            $table->string('idGenero');
            $table->string('idTipoDocumento');
            $table->string('idDepartamentoExpedicion');
            $table->string('idMunicipioEspedicion');
            $table->string('idMunicipio');
            $table->string('idDepartamento');
            $table->string('idZona');
            $table->string('idEpsPrivado');
            $table->string('idEpsMunicipio');
            $table->string('idVictimaConflicto');
            $table->string('idEtnia');
            $table->string('idEstatusAlumnoMadre');
            $table->string('idDiscapacidad');
            $table->string('idTranstornoAprendisaje');
            $table->string('idApoyoAcademico');
            $table->string('idCapacidadesExeccionales');
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
        Schema::dropIfExists('estudiantes');
    }
}
