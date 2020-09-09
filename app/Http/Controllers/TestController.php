<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $data = ["type" => "jeja", "base" => "cheese crust"];
        return view('test', $data);
    }

}
