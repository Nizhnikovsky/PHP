<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 24.03.2018
 * Time: 22:11
 */

class Model
{
    protected $db;
    
    public function __construct()
    {
        $this->db = App::$db;
    }
    
}