<?php

namespace App\Exports;

use App\Estudiantes;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class EstudiantesExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings():array
    {
    	return [
    		'TIPO DOCUMENTO',
    		'NUMERO DE DOCUMENTO',
    		'GENERO',
    		'DEPARTAMENTO EXPEDECION',
    		'MUNICIPIO EXPEDICION',
    		'FECHA NACIMIENTO',
    		'MUNICIPIO',
    		'DEPARTAMENTO',
    		'APELLIDO',
    		'NOMBRE',
    		'DIRECCION',
    		'BARRIO',
    		'ZONA',
    		'TELEFONO',
    		'CELULAR',
    		'CORREO',
    		'EPS PRIVADA',
    		'EPS MUNICIPIO',
    		'INSTITUCION DE DONDE PROVIENE',
    		'EPS',
    		'IPS',
    		'TIPO DE SANGRE',
    		'VICTIMA DEL CONFLICTO ARMADO',
    		'NUMERO DEL CARNET SISBEN',
    		'PUNTAJE DEL SISBEN',
    		'ESTRATO',
    		'ALUMNOS MADRES',
    		'ETNIA',
    		'DISCAPACIDAD',
    		'TRANSTORNO DE APRENDISAJE',
    		'APOYO ACADEMICOS',
    		'CAPACIDADES ECEXIONALES',
    		'APELLIDO DEL ACUDIENTE',
    		'NOMBRE DEL ACUDIENTE',
    		'PAIS DEL ACUDIENTE',
    		'DIRECCION DEL ACUDIENTE',
    		'BARRIO DEL ACUDIENTE',
    		'PARENTESCO DEL ACUDIENTE',
    		'ZONA DEL ACUDIENTE',
    		'CELULAR ACUDIENTE',
    		'CORREO DEL ACUDIENTE',
    		'TIPO DE DOCUMENTO DEL ACUDIENTE',
    		'NUMERO DE DOCUMENTO DEL ACUDIENTE',
    		'GENERO DEL ACUDIENTE',
    		'DEPARTAMENTO DE EXPEDICION DEL ACUDIENTE',
    		'MUNICIPIO DE EXPEDICION DEL ACUDIENTE',
    		'CONVIVE CON EL ESTUDIANTE',
    		'TIPO DE EMPLEO',
    		'OCUPACION DEL ACUDIENTE',
    		'PROFECION DEL ACUDIENTE',
    		'DIRECCION DE LA EMPRESA DEL ACUDIENTE',
    		'NOMBRE DE LA EMPRESA DEL ACUDIENTE',
    		'CARGO QUE DESEMPEÑA EL ACUDIENTE',
    		'TELEFONO DE LA EMPRESA DEL ACUDIENTE',
    	];
    }

    public function collection()
    {
         
        return Estudiantes::join('generos','generos.id','=','estudiantes.idGenero')->join('etnias','etnias.id','=','estudiantes.idEtnia')->join('tipo_documentos','tipo_documentos.id','=','estudiantes.idTipoDocumento')->join('departamento_expedicions','departamento_expedicions.id','=','estudiantes.idDepartamentoExpedicion')->join('municipio_expeicions','municipio_expeicions.id','=','estudiantes.idMunicipioEspedicion')->join('municipios','municipios.id','=','estudiantes.idMunicipio')->join('departamentos','departamentos.id','=','estudiantes.idDepartamento')->join('zonas','zonas.id','=','estudiantes.idZona')->join('eps_privados','eps_privados.id','=','estudiantes.idEpsPrivado')->join('eps_municipios','eps_municipios.id','=','estudiantes.idEpsMunicipio')->join('victima_conflictos','victima_conflictos.id','=','estudiantes.idVictimaConflicto')->join('estatus_alumno_madres','estatus_alumno_madres.id','=','estudiantes.idEstatusAlumnoMadre')->join('discapacidads','discapacidads.id','=','estudiantes.idDiscapacidad')->join('transtorno_aprendisajes','transtorno_aprendisajes.id','=','estudiantes.idTranstornoAprendisaje')->join('apoyo_academicos','apoyo_academicos.id','=','estudiantes.idApoyoAcademico')->join('capacidades_excepcionales','capacidades_excepcionales.id','=','estudiantes.idCapacidadesExeccionales')->join('tipo_empleos','tipo_empleos.id','=','estudiantes.idTipoEmpleoAcudiente')->join('genero_acudientes','genero_acudientes.id','=','estudiantes.idGeneroAcudiente')->join('zona_acudientes','zona_acudientes.id','=','estudiantes.idZonaAcudiente')->join('tipo_documento_acudientes','tipo_documento_acudientes.id','=','estudiantes.idTipoDocumentoAcudiente')->join('departamento_expedicion_acudientes','departamento_expedicion_acudientes.id','=','estudiantes.idDepartamentoExpedicionAcudiente')->join('municipio_expedicion_acudientes','municipio_expedicion_acudientes.id','=','estudiantes.idMunicipioExpedicionAcudiente')->select('tipo_documentos.documento','estudiantes.id','generos.genero','departamento_expedicions.departamentoExpedicion','municipio_expeicions.municipioExpedicion','estudiantes.fechaNacimiento','municipios.municipio','departamentos.departamento','estudiantes.apellido','estudiantes.nombre','estudiantes.direccion','estudiantes.barrio','zonas.zona','estudiantes.telefono','estudiantes.celular','estudiantes.email','eps_privados.sector','eps_municipios.municipios','estudiantes.insProveniente','estudiantes.eps','estudiantes.ips','estudiantes.tipoSangre','victima_conflictos.victima','estudiantes.noCarnetSisben','estudiantes.puntajeSisben','estudiantes.estrato','estatus_alumno_madres.estatus','etnias.etnia','discapacidads.discapacidad','transtorno_aprendisajes.transtorno','apoyo_academicos.apoyo','capacidades_excepcionales.capacidades','estudiantes.apellidoAcudiente','estudiantes.nombreAcudiente','estudiantes.paisAcudiente','estudiantes.direccionAcudiente','estudiantes.barrioAcudiente','estudiantes.parentescoAcudiente','zona_acudientes.zonaAcudiente','estudiantes.celularAcudiente','estudiantes.emailAcudiente','tipo_documento_acudientes.tipoDocument','estudiantes.idAcudiente','genero_acudientes.generoAcudiente','departamento_expedicion_acudientes.departamentoAcudiente','municipio_expedicion_acudientes.municipioAcudiente','estudiantes.convivenciaAcudiente','tipo_empleos.tipo','estudiantes.ocupacionAcudiente','estudiantes.profecionAcudiente','estudiantes.direccionEmpresaAcudiente','estudiantes.nombreEmpresaAcudiente','estudiantes.cargoEmpresaAcudiente','estudiantes.telefonoEmpresaAcudiente')->get();
    }
}
