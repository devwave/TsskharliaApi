<?php

namespace App\Core;

class Helpers //I may use these in the future !
{
    public static function redirect($path)
    {
        header("Location: /{$path}");
    }

    public static function msg($success, $status, $message, $extra = [])
    {
        return array_merge([
            'success' => $success,
            'status' => $status,
            'message' => $message
        ], $extra);
    }
}
