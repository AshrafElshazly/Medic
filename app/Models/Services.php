<?php

namespace App\Models;

use Source\Database\Db;

class Services
{
    public static function connect_table()
    {
        return Db::getInstance()->table('services');
    }
}