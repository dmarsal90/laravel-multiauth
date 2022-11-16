<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if (Auth::user()->hasRole('user')){
            return view('userdash');
        }
        if (Auth::user()->hasRole('writer')){
            return view('writerdash');
        }
        if (Auth::user()->hasRole('admin')){
            return view('dashboard');
        }
    }
}
