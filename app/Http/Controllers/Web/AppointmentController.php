<?php

namespace App\Http\Controllers\Web;

use Source\View\View;
use App\Models\Doctors;
use App\Models\Settings;

class AppointmentController
{
    public function index()
    {
        $data['doctors']= Doctors::connect_table()->select("img,name,about")->where('is_top','=','1')->limit(3)->get();
        $data['settings'] = Settings::connect_table()->select()->getOne();

        View::load('web/appointment/index',$data);
    }
}