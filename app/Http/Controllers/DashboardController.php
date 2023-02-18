<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //dashboard
    public function index(){

        return view('dashboard');

    }
}
