<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function home(){

        if(Auth::user()->role != "admin"){
            return redirect()->route('homepage');
        }
        return view('admin.index');
    }
}
