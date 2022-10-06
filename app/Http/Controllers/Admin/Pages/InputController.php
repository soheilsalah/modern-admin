<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InputController extends Controller
{
    public function radioAndChecboxes()
    {
        return view('admin.pages.inputs.radio-and-checkboxes');
    }
    
    public function switch()
    {
        return view('admin.pages.inputs.switch');
    }
    
    public function select2()
    {
        return view('admin.pages.inputs.select2');
    }
    
    public function tags()
    {
        return view('admin.pages.inputs.tags');
    }
}
