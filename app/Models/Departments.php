<?php

namespace App\Models;

use Source\Database\Db;

class Departments
{
    public static function connect_table()
    {
        return Db::getInstance()->table('departments');
    }
}