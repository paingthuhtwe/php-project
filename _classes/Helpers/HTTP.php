<?php

namespace Helpers;

class HTTP
{
    public static $base = "http://localhost/app/project";

    public static function redirect($path, $q = "")
    {
        $url = static::$base . $path;
        if ($q) {
            $url .= "?$q";
        }
        header("location: $url");
    }
}
