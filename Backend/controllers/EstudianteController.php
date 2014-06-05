<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EstudianteController extends \BaseController{
    
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index() {
        $estudiantes = Estudiante::all()->toJson();
        return $estudiantes;
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return Response
     */
    public function show($idEstudainte) {
        $estudiante = Estudiante::find($idEstudainte)->toJson();
        return $estudiante;
    }
}

