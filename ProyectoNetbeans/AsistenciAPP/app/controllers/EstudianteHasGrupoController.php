<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EstudianteHasGrupoController extends \BaseController{
    
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index() {
        $estudianteHasGrupo = EstudianteHasGrupo::all()->toJson();
        return $estudianteHasGrupo;
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return Response
     */
    public function show($idEstudianteHasGrupo) {
        $estudianteHasGrupo = EstudianteHasGrupo::find($idEstudianteHasGrupo)->toJson();
        return $estudianteHasGrupo;
    }
}

