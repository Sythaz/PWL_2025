<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    // public function greeting() {
    //     return view('blog.hello', ['name' => 'Muhammad Syafiq Aldiansyah']);
    // }

    public function greeting(){
        return view('blog.hello')
        ->with('name','Muhammad Syafiq Aldiansyah')
        ->with('occupation','Astronaut');
    }
}
