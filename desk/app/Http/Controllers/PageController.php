<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
        return view('index');
    } 
    
    public function reservation(){
        return view('reservation');
    }
    
    public function calendar(){
        return view('calendar');
    }
    
    public function guest(){
        return view('guest');
    }
    
    public function inventory(){
        return view('inventory');
    }
    
    public function rooms(){
        return view('rooms');
    }
}
