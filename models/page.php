<?php

class Page extends Model
{
    public function getList($id= false)
    {
        $sql = 'select * from task';
        if($id) {
            if($id == '?email') {
                $sql .= ' ORDER BY email ASC';
            }
            else if ($id == '?name') {
                $sql .= ' ORDER BY name ASC';
            }
            else if ($id == '?status') {
                $sql .= ' ORDER BY status ASC';
            }
        }
        return $this->db->query($sql);
    }

    public function getById($id)
    {
        $alias = $this->db->escape($id);
        $sql = "select * from task where id = '{$id}'";
        $result = $this->db->query($sql);
        return isset($result[0])? $result[0] : null;
    }
    public function getTotalTasks()
    {
        $sql = 'select COUNT from task';
        return $this->db->query($sql);
    }
    public function setTask($user_name, $email, $text)
    {
        $user_name = $this->db->escape($user_name);
        $email = $this->db->escape($email);
        $text = $this->db->escape($text);
    
        $sql = 'INSERT INTO `task` ( user_name, user_mail, description) '
            . 'VALUES ( :user_name, :email, :text)';
        
        return $this->db->query($sql);
        
    }
    
    public function save($data, $id = null)
    {
        if(!isset($data['name'])|| !isset($data['email'])|| !isset($data['content'])){
            return false;
        }
        $id = (int)$id;
        $name = $this->db->escape($data['name']);
        $email = $this->db->escape($data['email']);
        $text = $this->db->escape($data['content']);
        $is_published = isset($data['is_published']) ? 1 : 0;
        if(!$id)
        {
            $sql = "insert into task set user_name ='{$name}', user_mail ='{$email}', description ='{$text}', status ='{$is_published}'";
        }
        else
        {
            $sql = "update task set user_name ='{$name}', user_mail ='{$email}', description ='{$text}', status ='{$is_published}' where id ='{$id}'";
        }
    
        return $this->db->query($sql);
    }
}