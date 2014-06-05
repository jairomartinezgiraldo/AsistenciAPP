<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class GrupoController extends \BaseController{
    
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index() {
        $grupos = Grupo::all()->toJson();
        return $grupos;
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return Response
     */
    public function show($idGrupo) {
        $grupo = Grupo::find($idGrupo)->toJson();
        return $grupo;
    }
}
