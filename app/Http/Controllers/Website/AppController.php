<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function about()
    {
        return view('website.about');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function faqs()
    {
        return view('website.faq');
    }

    public function policy()
    {
        return view('website.policy');
    }

    public function terms()
    {
        return view('website.terms');
    }
}
