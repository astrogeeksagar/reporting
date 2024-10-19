<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;


class Fetch extends Controller
{
    public function empFetch(Request $request)
    {
        $count = $request->input('count');
        $empdata = Employee::where('id', '<=', $count)->get();
        return json_encode($empdata);
    }
}
