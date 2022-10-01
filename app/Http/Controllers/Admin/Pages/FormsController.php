<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function basicLayouts()
    {
        return view('admin.pages.forms.basic-layouts');
    }

    public function borderedLayouts()
    {
        return view('admin.pages.forms.bordered-layouts');
    }
    
    public function wizard()
    {
        return view('admin.pages.forms.wizard');
    }
}
