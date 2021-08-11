<?php

namespace App\Http\Controllers\Web;

use App\Models\Doctors;
use App\Models\Features;
use App\Models\FeedBacks;
use App\Models\Settings;
use Source\View\View;
use App\Models\Test;
use App\Models\WorkingHours;

class HomeController
{
    public function index()
    {
        $data['working_hours'] = WorkingHours::connect_table()->select()->get();
        $data['features']      = Features::connect_table()->select()->get();
        $data['feed_backs']    = FeedBacks::connect_table()->select()->get();
        $data['doctors']       = Doctors::connect_table()->select("img,name,about")->where('is_top','=','1')->limit(3)->get();
        $data['settings']      = Settings::connect_table()->select()->getOne();

        View::load("web/index",$data);
    }
}