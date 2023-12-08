<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobSeekerController extends Controller
{
    public function home() {
        $jobs = Job::all();

        return view('home', compact('jobs'));
        // return view("home");
    }

    public function login() {
        echo Auth::user();
        return view("login");
    }
}
