<?php

class TokenMiddleware
{
    public function putToken()
    {
        $_SESSION['csrf_token'] = md5(uniqid(mt_rand(), true));
    }

    public function checkToken()
    {
        $token = $_POST['csrf_token'];

        if (!$token || $token !== $_SESSION['csrf_token']) {
            throw new LoggedException('Method Not Allowed', 405);
        }
    }
}