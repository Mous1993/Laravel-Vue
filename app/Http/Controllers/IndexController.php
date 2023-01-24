<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        // return 'index';
        return inertia(
            'Index/Index',
            [
                'message' => 'hello from kamel'
            ]
            );
    }
    public function show(){
        return inertia('Index/Show');

        
    }
}
