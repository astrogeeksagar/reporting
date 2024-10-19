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
    public function pagination_tabulator(Request $request){
        return view('frontend.pagination_tabulator');
    }

    public function filter_tabulator(Request $request) {
        return view('frontend.filter_tabulator');
    }

    public function groupby_tabulator(Request $request) {
        return view('frontend.groupby_tabulator');
    }

    public function sum_tabulator(Request $request) {
        return view('frontend.sum_tabulator');
    }

    public function avg_tabulator(Request $request) {
        return view('frontend.avg_tabulator');
    }
}
