<?php

namespace App\Http\Controllers\Admin\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormbuilderController extends Controller
{
    public function index()
    {
        $hello = "Hello World";

        return view('admin.my-projects.form-builder.index', compact('hello'));
    }
}