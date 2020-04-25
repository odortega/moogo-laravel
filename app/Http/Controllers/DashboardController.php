<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('welcome', [
            'title' => $request->query('title', 'No Title')
        ]);
    }
}
