<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TelzirController extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function faleMais30()
    {
        return view('falemais/faleMais30');
    }

    public function faleMais60()
    {
        return view('falemais/faleMais60');
    }

    public function faleMais120()
    {
        return view('falemais/faleMais120');
    }

    public function calculo()
    {
        return view('calculo');
    }
}
