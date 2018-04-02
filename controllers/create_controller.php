<?php

class CreateController extends Controller
{
    public function __construct($data = array())
    {
        parent::__construct($data);
        $this->model = new Task();
    }
    
    public function index()
    {
       if($_POST)
       {
           if($this->model->save($_POST))
           {
               if (is_uploaded_file($_FILES["image"]["tmp_name"]))
               {
                   // Если загружалось, переместим его в нужную папке, дадим новое имя
                   move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/webroot/uploads/".rand(1,99).".jpg");
               }
             Session::setFlash('Спасибо, Ваша задача сохранена успешно.');
           }
       }
    }
    public function preview()
    {
    
    }
}