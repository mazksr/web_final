<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    public function home() {
        return view("home");
    }

    public function login() {
        return view("login");
    }
}
