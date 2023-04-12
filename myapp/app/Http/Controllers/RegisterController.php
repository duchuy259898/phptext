<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
class RegisterController extends Controller
{
    //
//     public function store(Request $request)
// {
//     dd('login');
// }
    public function index():View
    {
        return view('test');
    }
}
