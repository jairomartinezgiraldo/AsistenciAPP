<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Estudiante extends Eloquent{
    
    protected $table = 'estudiantes';
    public $timestamps = false;
    
    public function estudianteHasGrupo(){
        return $this->hasMany('EstudianteHasGrupo');
    }
}

