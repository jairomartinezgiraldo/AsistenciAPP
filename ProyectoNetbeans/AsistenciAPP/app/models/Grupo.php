<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Grupo extends Eloquent{
    protected $table = 'grupos';
    public $timestamps=false;
    
    public function curso(){
        return $this->belongsTo('Curso');
    }
    
    public function profesor(){
        return $this->belongsTo('Profesor');
    }
    
    public function estudianteHasGrupo(){
        return $this->hasMany('EstudianteHasGrupo');
    }
}
