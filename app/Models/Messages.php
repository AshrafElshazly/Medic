<?php

namespace App\Models;

use Source\Database\Db;

class Messages
{
    public static function connect_table()
    {
        return Db::getInstance()->table('messages');
    }
}