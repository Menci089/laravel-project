<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\register;

class RegisterController extends Controller
{
    public function register() {
        return view('register');
    }
}
