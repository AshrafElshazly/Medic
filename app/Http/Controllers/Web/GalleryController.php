<?php

namespace App\Http\Controllers\Web;

use App\Models\Shots;
use Source\View\View;
use App\Models\Settings;

class GalleryController
{
    public function index()
    {
        $data['shots'] = Shots::connect_table()->select()->get();
        $data['settings'] = Settings::connect_table()->select()->getOne();

        View::load('web/gallery/index',$data);
    }
}