<?php

namespace Helpers;

class Auth
{
    public static function check()
    {
        session_start();
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        HTTP::redirect("/index.php", "auth=false");
    }
}
