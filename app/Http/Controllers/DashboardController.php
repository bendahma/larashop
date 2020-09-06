<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            return view('backoffice.admin.index');
        }elseif(Auth::user()->role == 'manager'){
            return view('backoffice.manager.index');
        }else{
            return url('/');
        }
    }
}
