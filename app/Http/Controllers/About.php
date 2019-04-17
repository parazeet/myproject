<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class About extends Controller
{
    public function main() 
    {
        return view('about');
    }
    public function anotherMain($name) 
    {
        return view('about', [
            'name' => $name,
            'datatime' => date('Y-m-d')
        ]);
    }
}
