<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IconPagesController extends Controller
{
    public function featherIcons()
    {
        return view('user.pages.icons.feather-icons');
    }

    public function lineAwesomeIcons()
    {
        return view('user.pages.icons.line-awesome-icons');
    }

    public function meteoconsIcons()
    {
        return view('user.pages.icons.meteocons-icons');
    }

    public function simpleLineIcons()
    {
        return view('user.pages.icons.simple-line-icons');
    }
}
