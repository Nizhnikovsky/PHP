<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 26.03.2018
 * Time: 21:58
 */

class Validate
{
    public static function checkUserData($email, $password)
    {
        
        $db = Db::getConnection();
        //$name = 'user';
        $sql = 'SELECT * FROM `user` WHERE email = :email AND password = :password';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();
        
        $user = $result->fetch();
        if ($user) {
            
            return $user['id'];
        }
        
    }
    
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    
    public static function checkPassword($password)
    {
        if (strlen($password) >= 4) {
            return true;
        }
        return false;
    }
    
    public static function auth($userId)
    {
        
        $_SESSION['user'] = $userId;
    }
}