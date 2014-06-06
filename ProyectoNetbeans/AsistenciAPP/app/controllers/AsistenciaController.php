<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AsistenciaController extends \BaseController{
      /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index() {
        $asistencias = Asistencia::all()->toJson();
        return $asistencias;
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return Response
     */
    public function show($idAsistencia) {
        $asistencia = Asistencia::find($idAsistencia)->toJson();
        return $asistencia;
    }
    
    public function create(){
        $hasgrupo = EstudianteHasGrupo::all();
        $grupoId=Input::get('grupo_id');
        if($hasgrupo->grupos_id ===$grupoId){
                $asistencia = new Asistencia;
                $asistencia->fecha = date("Y/m/d/H/i/s");
                $asistencia->estudiante_has_grupo_id = $hasgrupo->id;
                $asistencia->Check = true;
                $grupo=  EstudianteHasGrupo::find($hasgrupo->id);
                $asistencia->$grupo->associate($grupo);
                $asistencia->save();
                return "Guardado de las Asistencia Fue Con Exito.";
        } 
    }
    
}