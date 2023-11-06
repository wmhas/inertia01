<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Inertia\Inertia;


class DemoController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ];
        
        return Inertia::render('DemoComponent', ['user' => $data]);
    }
}

 