<?php

namespace App\Http\Controllers\Home;

use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function infophp()
    {
        // Show all information, defaults to INFO_ALL
        phpinfo();
    }
    
    public function aboutme()
    {
        return view("aboutme");
    }
    
    public function index()
    {
        return view("home.index");
    }
}