<?php

class Task extends Model
{
    public function save($data, $id = null)
    {
       if(!isset($data['name'])|| !isset($data['email'])|| !isset($data['text'])){
           return false;
       }
       $id = (int)$id;
       $name = $this->db->escape($data['name']);
       $email = $this->db->escape($data['email']);
       $text = $this->db->escape($data['text']);
       
       if(!$id)
       {
           $sql = "insert into task set user_name ='{$name}', user_mail ='{$email}', description ='{$text}'";
       }
       else
       {
           $sql = "update task set user_name ='{$name}', user_mail ='{$email}', description ='{$text}' where id ='{$id}'";
       }
       
       return $this->db->query($sql);
    }
    
}