<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{

    public function homepage(Request $request) {
        return view('frontend.index');
    }

    public function print_tabulator(Request $request) {
        return view('frontend.print_tabulator');
    }
}
