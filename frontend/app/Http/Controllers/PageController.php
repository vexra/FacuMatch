<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landingPage()
    {
        return view('landing');
    }

    public function recommendationPage()
    {
        return view('recommendation');
    }
}
