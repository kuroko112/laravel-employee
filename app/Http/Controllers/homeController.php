<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class homeController extends Controller
{
    public function __construct()
    {
        
        $this->middleware('auth');
    }
    public function profile() {
        // To get the user id 
        $id =  FacadesAuth::id();
        echo $id;
        return view('users/profile');
    }
}
