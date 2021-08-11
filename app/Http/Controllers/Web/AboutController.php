<?php

namespace App\Http\Controllers\Web;

use Source\View\View;
use App\Models\Settings;

class AboutController
{
    public function index()
    {
        $data['settings'] = Settings::connect_table()->select()->getOne();

        View::load('web/about/index',$data);
    }
}