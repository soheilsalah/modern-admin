<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponentPagesController extends Controller
{
    public function sweetAlerts()
    {
        return view('admin.pages.components.sweet-alerts');
    }

    public function toastr()
    {
        return view('admin.pages.components.toastr');
    }
}
