<?php

class UsersController extends Controller
{
    public function __construct(array $data = array())
    {
        parent::__construct($data);
        $this->model = new User();
    }
    
    public function admin_login()
    {
        if($_POST && isset($_POST['users']) && isset($_POST['password']))
        {
            $user = $this->model->getByLogin($_POST['users']);
            $hash = md5(Config::get('salt').$_POST['password']);
            if($user && $hash == $user['password'])
            {
                Session::set('users',$user['users']);
                Session::set('role',$user['role']);
            }
            Router::redirect('/admin');
        }
    }
    
    public function admin_logout()
    {
        Session::destroy();
        Router::redirect('/');
    }
}