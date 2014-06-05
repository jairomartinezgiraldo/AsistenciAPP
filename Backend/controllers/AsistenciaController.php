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
        return;
    }
    
}