<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variables;

class WelcomeController extends Controller
{

    public function inicio()
    {
        $data =  Variables::getAll();
        return view('welcome', compact('data'));
    }

    public function contact()
    {
        $data =  Variables::getAll();
        return view('areas.contact', compact('data'));
    }

    public function about()
    {
        $data =  Variables::getAll();
        return view('areas.about', compact('data'));
    }

    public function services()
    {
        $data =  Variables::getAll();
        return view('areas.services', compact('data'));
    }

    public function team()
    {
        $data =  Variables::getAll();
        return view('areas.team', compact('data'));
    }
}
