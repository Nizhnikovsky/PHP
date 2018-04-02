<?php

define('COUNT_PER_PAGE',4);

class PagesController extends Controller
{
    public function __construct(array $data = array())
    {
        parent::__construct($data);
        $this->model = new Page();
    }
    
    public function index()
    {
        if($_GET['page'])
        {
            $page = (int)$_GET['page'];
            if(!$page)
            {
                $page = 1;
            }
        }
        else
        {
            $page = 1;
        }
        
        if(isset($_GET))
        {
          $this->data['pages'] = $this->model->getList($page,4);
        }
    }
    
    public function view()
    {
        $params = App::getRoute()->getParams();
        
        if(isset($params[0]))
        {
            $id = strtolower($params[0]);
            
            $this->data['page'] = $this->model->getById($id);
        }
    }
    
    public function admin_index()
    {
        $this->data['pages'] = $this->model->getList();
    }
    
    public function admin_edit()
    {
        if($_POST)
        {
            $id = isset($_POST['id']) ? $_POST['id'] : null;
            $result = $this->model->save($_POST,$id);
            if($result)
            {
                Session::setFlash('Задача сохранена');
            }
            else
            {
                Session::setFlash('Ошибка!!');
            }
            Router::redirect('/admin/pages');
        }
        
        if(isset($this->params[0]))
        {
            $this->data['page'] = $this->model->getById($this->params[0]);
        }
        else
        {
            Session::setFlash('Неверный id задачи');
            Router::redirect('admin/pages/');
        }
    }
    public function admin_delete()
    {
        if(isset($this->params[0]))
        {
            $result = $this->model->delete($this->params[0]);
            if($result)
            {
                Session::setFlash('Задача удалена!');
            }
            else
            {
                Session::setFlash('Ошибка!!');
            }
            Router::redirect('/admin/pages');
        }
    }
}