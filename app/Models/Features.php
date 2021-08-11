<?php

namespace App\Models;

use Source\Database\Db;

class Features
{
    public static function connect_table()
    {
        return Db::getInstance()->table('features');
    }
}