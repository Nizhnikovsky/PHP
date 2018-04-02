<?php

class Page extends Model
{
    public function getList( $page, $count_per_page)
    {
        $start = ($page - 1)* $count_per_page;
        
        $sorting = $_GET['sort'];
    
        switch ($sorting)
        {
        
            case 'email';
                $sorting = 'user_mail ASC';
                break;
        
            case 'name';
                $sorting = 'user_name ASC';
                break;
        
            case 'status';
                $sorting = 'status DESC';
                break;
        
            default;
                $sorting = 'id ASC';
                break;
        }
        $sorting = $this->db->escape($sorting);
        $sql = "select * from task order by $sorting limit $start,$count_per_page";
        
        return $this->db->query($sql);
    }

    public function getById($id)
    {
        $id = $this->db->escape($id);
        $sql = "select * from task where id = '{$id}'";
        $result = $this->db->query($sql);
        return isset($result[0])? $result[0] : null;
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
    
    public function delete($id)
    {
        $id = (int)$id;
        
        $sql = "delete from task where id = '{$id}'";
        
        return $this->db->query($sql);
    }
    public function getTotalTasks()
    {
        $sql = 'SELECT count(id) AS count FROM `task`';
        $result = $this->db->query($sql);
        return $result['count'];
    }
    
    public static function totalPages($total_tasks,$count_per_page)
    {
        if($total_tasks<$count_per_page)
        {
            return false;
        }
        
        $pages_amount = intval(($total_tasks - 1) / COUNT_PER_PAGE) + 1;
        
        return $pages_amount;
    }
}