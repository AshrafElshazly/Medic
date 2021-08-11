<?php

namespace App\Http\Controllers\Web;

use Source\View\View;
use App\Models\Services;
use App\Models\Settings;

class ServicesController
{
    public function index()
    {
        $data['services'] = Services::connect_table()->select()->get();
        $data['settings'] = Settings::connect_table()->select()->getOne();

        View::load('web/services/index',$data);
    }
}