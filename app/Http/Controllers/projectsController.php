<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

use App\ApoyoAcademico;
use App\CapacidadesExcepcionales;
use App\DepartamentoExpedicion;
use App\Departamentos;
use App\Discapacidad;
use App\EpsMunicipio;
use App\EpsPrivado;
use App\EstatusAlumnoMadre;
use App\Estudiantes;
use App\Etnias;
use App\Genero;
use App\Municipio;
use App\MunicipioExpeicion;
use App\TipoDocumento;
use App\TipoEmpleo;
use App\TranstornoAprendisaje;
use App\VictimaConflicto;
use App\Zona;

class projectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'id'                                => 'required|unique:estudiantes',
            'tipoDocumento'                     => 'required',
            'genero'                            => 'required',
            'departamentoExpedicion'            => 'required',
            'municipioExpedicion'               => 'required',
            'fechaNacimiento'                   => 'required',
            'departamento'                      => 'required',
            'municipio'                         => 'required',
            'apellido'                          => 'required',
            'nombre'                            => 'required',
            'direccion'                         => 'required',
            'barrio'                            => 'required',
            'zona'                              => 'required',
            'telefono'                          => 'required',
            'celular'                           => 'required',
            'email'                             => 'required|string|email|max:255|unique:estudiantes',
            'sectorPrivado'                     => 'required',
            'epsMunicipio'                      => 'required',
            'instProviene'                      => 'required',
            'eps'                               => 'required',
            'ips'                               => 'required',
            'tipoSangre'                        => 'required',
            'victimaConflicto'                  => 'required',
            'numeroSisben'                      => 'required',
            'puntajeSisben'                     => 'required',
            'estrato'                           => 'required',
            'alumnoMadre'                       => 'required',
            'etnia'                             => 'required',
            'discapacidad'                      => 'required',
            'transtornoAprendisaje'             => 'required',
            'apoyoEspecial'                     => 'required',
            'capacidadEcepcional'               => 'required',
            'apellidoAcudiente'                 => 'required',
            'nombreAcudiente'                   => 'required',
            'paisAcudiente'                     => 'required',
            'direccionAcudiente'                => 'required',
            'barrioAcudiente'                   => 'required',
            'parentesco'                        => 'required',
            'zonaAcudiente'                     => 'required',
            'telefonoAcudiente'                 => 'required',
            'celularAcudiente'                  => 'required',
            'emailAcudiente'                    => 'required|string|email|max:255|unique:estudiantes',
            'tipoDocumentoAcudiente'            => 'required',
            'idAcudiente'                       => 'required|unique:estudiantes',
            'generoAcudiente'                   => 'required',
            'departamentoExpedicionAcudiente'   => 'required',
            'municipioExpedicionAcudiente'      => 'required',
            'convivenciaEstudiante'             => 'required',
            'fechaNacimientoAcudiente'          => 'required',
            'departamentoAcudiente'             => 'required',
            'municipioAcudiente'                => 'required',
            'tipoEmpleo'                        => 'required',
            'ocupacion'                         => 'required',
            'profecion'                         => 'required',
            'direccionEmpresa'                  => 'required',
            'nombreEmpresa'                     => 'required',
            'cargoEmpresa'                      => 'required',
            'telefonoEmpresa'                   => 'required',

        ],[

            'id.required'                                => 'El campo Identificacion es obligatorio.',
            'epsMunicipio.required'                      => 'El campo eps del municipio es obligatorio',
            'victimaConflicto.required'                  => 'El campo poblacion victima del conflicto es obligatorio.',
            'apellidoAcudiente.required'                 => 'El campo apellido es obligatorio.',
            'nombreAcudiente.required'                   => 'El campo nombre es obligatorio.',
            'paisAcudiente.required'                     => 'El campo pais es obligatorio.',
            'direccionAcudiente.required'                => 'El campo dirección es obligatorio',
            'barrioAcudiente.required'                   => 'El campo barrio es obligatorio',
            'zonaAcudiente.required'                     => 'El campo zona es obligatorio',
            'telefonoAcudiente.required'                 => 'El campo telefono es obligatorio',
            'celularAcudiente.required'                  => 'El campo celular es obligatorio',
            'emailAcudiente.required'                    => 'El campo email es obligatorio',
            'tipoDocumentoAcudiente.required'            => 'El campo tipo documento es obligatorio',
            'idAcudiente.required'                       => 'El campo identificacion es obligatorio',
            'generoAcudiente.required'                   => 'El campo genero es obligatorio',
            'departamentoExpedicionAcudiente.required'   => 'El campo departamento expedicion es obligatorio',
            'municipioExpedicionAcudiente.required'      => 'El campo municipio expedicion es obligatorio',
            'convivenciaEstudiante.required'             => 'El campo convivencia paternal es obligatorio',
            'fechaNacimientoAcudiente.required'          => 'El campo fecha nacimiento es obligatorio',
            'departamentoAcudiente.required'             => 'El campo departamento es obligatorio',
            'municipioAcudiente.required'                => 'El campo municipio es obligatorio',
            'tipoEmpleo.required'                        => 'El campo tipo de empleo es obligatorio',

        ]);

            $newStudent = new App\Estudiantes;
            
            $newStudent->id=$request->id; 
            $newStudent->fechaNacimiento=$request->fechaNacimiento; 
            $newStudent->apellido=$request->apellido; 
            $newStudent->nombre=$request->nombre; 
            $newStudent->direccion=$request->direccion; 
            $newStudent->telefono=$request->telefono; 
            $newStudent->barrio=$request->barrio; 
            $newStudent->celular=$request->celular; 
            $newStudent->email=$request->email; 
            $newStudent->insProveniente=$request->instProviene; 
            $newStudent->eps=$request->eps; 
            $newStudent->ips=$request->ips; 
            $newStudent->tipoSangre=$request->tipoSangre; 
            $newStudent->noCarnetSisben=$request->numeroSisben; 
            $newStudent->puntajeSisben=$request->puntajeSisben; 
            $newStudent->estrato=$request->estrato; 
            $newStudent->idAcudiente=$request->idAcudiente; 
            $newStudent->apellidoAcudiente=$request->apellidoAcudiente; 
            $newStudent->nombreAcudiente=$request->nombreAcudiente; 
            $newStudent->paisAcudiente=$request->paisAcudiente; 
            $newStudent->direccionAcudiente=$request->direccionAcudiente; 
            $newStudent->barrioAcudiente=$request->barrioAcudiente; 
            $newStudent->parentescoAcudiente=$request->parentesco; 
            $newStudent->celularAcudiente=$request->celularAcudiente; 
            $newStudent->emailAcudiente=$request->emailAcudiente; 
            $newStudent->fechaNacimientoAcudiente=$request->fechaNacimientoAcudiente; 
            $newStudent->ocupacionAcudiente=$request->ocupacion; 
            $newStudent->profecionAcudiente=$request->profecion; 
            $newStudent->direccionEmpresaAcudiente=$request->direccionEmpresa; 
            $newStudent->nombreEmpresaAcudiente=$request->nombreEmpresa; 
            $newStudent->cargoEmpresaAcudiente=$request->cargoEmpresa; 
            $newStudent->telefonoEmpresaAcudiente=$request->telefonoEmpresa; 
            $newStudent->convivenciaAcudiente=$request->convivenciaEstudiante; 
            $newStudent->idGeneroAcudiente=$request->generoAcudiente; 
            $newStudent->idTipoDocumentoAcudiente=$request->tipoDocumentoAcudiente; 
            $newStudent->idDepartamentoExpedicionAcudiente=$request->departamentoExpedicionAcudiente; 
            $newStudent->idMunicipioExpedicionAcudiente=$request->municipioExpedicionAcudiente; 
            $newStudent->idMunicipioAcudiente=$request->municipioAcudiente; 
            $newStudent->idDepartamentoAcudiente=$request->departamentoAcudiente; 
            $newStudent->idZonaAcudiente=$request->zonaAcudiente; 
            $newStudent->idTipoEmpleoAcudiente=$request->tipoEmpleo; 
            $newStudent->idGenero=$request->genero; 
            $newStudent->idTipoDocumento=$request->tipoDocumento; 
            $newStudent->idDepartamentoExpedicion=$request->departamentoExpedicion; 
            $newStudent->idMunicipioEspedicion=$request->municipioExpedicion; 
            $newStudent->idMunicipio=$request->municipio; 
            $newStudent->idDepartamento=$request->departamento; 
            $newStudent->idZona=$request->zona; 
            $newStudent->idEpsPrivado=$request->sectorPrivado; 
            $newStudent->idEpsMunicipio=$request->epsMunicipio; 
            $newStudent->idVictimaConflicto=$request->victimaConflicto; 
            $newStudent->idEtnia=$request->etnia; 
            $newStudent->idEstatusAlumnoMadre=$request->alumnoMadre; 
            $newStudent->idDiscapacidad=$request->discapacidad; 
            $newStudent->idTranstornoAprendisaje=$request->transtornoAprendisaje; 
            $newStudent->idApoyoAcademico=$request->apoyoEspecial; 
            $newStudent->idCapacidadesExeccionales=$request->apoyoEspecial; 


            $newStudent->save();

           return view('formEcho');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // *
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }

    public function form()
    {
        $tipoDocumento           = TipoDocumento::all();
        $genero                  = Genero::all();
        $departamentoExpedicion  = DepartamentoExpedicion::all();
        $municipioExpedicion     = MunicipioExpeicion::all();
        $departamentos           = Departamentos::all();
        $Municipio               = Municipio::all();
        $zona                    = Zona::all();
        $epsPrivado              = EpsPrivado::all();
        $epsMunicipio            = EpsMunicipio::all();
        $victimaConflicto        = VictimaConflicto::all();
        $estatusMadre            = EstatusAlumnoMadre::all();
        $etnia                   = Etnias::all();
        $discapacidad            = Discapacidad::all();
        $transtorno              = TranstornoAprendisaje::all();
        $apoyo                   = ApoyoAcademico::all();
        $capacidades             = CapacidadesExcepcionales::all();
        $tipoEmpleo              = TipoEmpleo::all();

        return view('form', compact('tipoDocumento','genero','departamentoExpedicion','municipioExpedicion','departamentos','Municipio','zona','epsPrivado','epsMunicipio','victimaConflicto','estatusMadre','etnia','discapacidad','transtorno','apoyo','capacidades','tipoEmpleo'));
    }
}
