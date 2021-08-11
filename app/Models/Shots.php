<?php

namespace App\Models;

use Source\Database\Db;

class Shots
{
    public static function connect_table()
    {
        return Db::getInstance()->table('shots');
    }
}