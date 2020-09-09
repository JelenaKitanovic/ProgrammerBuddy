<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $data = ["type" => "COMMIT", "base" => "cheese crust"];
        return view('test', $data);
    }

}