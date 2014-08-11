<?php
/**
 * 
 */
class Auth
{
    
    public static function handleLogin()
    {
        @session_start();
        $isSpaCMS = $_SESSION['spaCMS'];
        if ($isSpaCMS == false) {
            session_destroy();
            header('location:' . URL . 'spaCMS');
            exit;
        }
    }
    
}