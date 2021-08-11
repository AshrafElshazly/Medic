<?php

namespace App\Models;

use Source\Database\Db;

class Settings
{
    public static function connect_table()
    {
        return Db::getInstance()->table('settings');
    }
}