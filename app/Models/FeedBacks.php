<?php

namespace App\Models;

use Source\Database\Db;

class FeedBacks
{
    public static function connect_table()
    {
        return Db::getInstance()->table('feed_backs');
    }
}