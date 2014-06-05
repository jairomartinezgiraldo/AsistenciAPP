<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Asistencia extends Eloquent{
    protected $table = 'asistencias';
    public $timestamps = false;
    
    public function estudianteHasGrupo(){
        return $this->belongsTo('EstudianteHasGrupo');
    }
    
}
