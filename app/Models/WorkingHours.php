<?php

namespace App\Models;

use Source\Database\Db;

class WorkingHours
{
    public static function connect_table()
    {
        return Db::getInstance()->table('working_hours');
    }
}