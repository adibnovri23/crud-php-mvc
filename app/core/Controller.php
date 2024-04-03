<?php 

// memanggil view utk ditampilkan 
class Controller 
{
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }    

    // untuk memanggil model
    public function model($model)
    {
        require_once '../app/models/'. $model. '.php';
        return new $model;
    }
    
}