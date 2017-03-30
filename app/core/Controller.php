<?php

/* 
 * Author: MD. ANWAR JAHID.
 * Email: ajr.jahid@gmail.com
 * FB: www.fb.com/ringkud
 */
class Controller
{
    public function model($model)
    {
        require_once '../app/models/'.$model.'.php';
        return new $model();
    } 
    public function view($view,$data=[]){
        require_once '../app/views/'.$view.'.php';
        //return new $view();
    }
}
