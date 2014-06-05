<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ProfesorController extends \BaseController {

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index() {
        $profesores = Profesor::all()->toJson();
        return $profesores;
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $profesor = Profesor::find($id)->toJson();
        return $profesor;
    }

}
