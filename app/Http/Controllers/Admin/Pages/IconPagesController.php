<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IconPagesController extends Controller
{
    public function featherIcons()
    {
        return view('admin.pages.icons.feather-icons');
    }

    public function lineAwesomeIcons()
    {
        return view('admin.pages.icons.line-awesome-icons');
    }

    public function meteoconsIcons()
    {
        return view('admin.pages.icons.meteocons-icons');
    }

    public function simpleLineIcons()
    {
        return view('admin.pages.icons.simple-line-icons');
    }
}
