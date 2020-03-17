<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowStub extends Controller
{
    public function __invoke(Request $request)
    {

        return view('website_in_dev');
    }
}
