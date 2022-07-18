<?php

namespace App\Http\Controllers;

use inertia\inertia;
use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function index(){

        $post = ['first','seconde'];

        return inertia::render('Test/Test' , compact('post'));

    
    }
}
