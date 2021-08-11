<?php

namespace App\Models;

use Source\Database\Db;

class Doctors
{
    public static function connect_table()
    {
        return Db::getInstance()->table('doctors');
    }
}