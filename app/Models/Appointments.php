<?php

namespace App\Models;

use Source\Database\Db;

class Appointments
{
    public static function connect_table()
    {
        return Db::getInstance()->table('appointments');
    }
}