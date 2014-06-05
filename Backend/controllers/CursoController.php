<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CursoController extends \BaseController{
        
    /**
     * Display a listing of the resource.
     * @return Response
     */
    
    public function index() {
        $cursos = Curso::all()->toJson();
        return $cursos;
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return Response
     */
    public function show($idCurso) {
        $curso = Curso::find($idCurso)->toJson();
        return $curso;
    }
}

