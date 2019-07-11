<?php 

    class Controller {  

        //Method untuk view
        public function view($view, $data = [])
        {
            # code...
            require_once '../app/views/' . $view . '.php';
        }

        //Method untuk model
        public function model($model)
        {
            # code...
            require_once '../app/models/' . $model . '.php';
            return new $model;
             
        }

        
    }



?>