<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $data = ["type" => "hawaian", "base" => "cheese crust"];
        return view('test', $data);
    }

    public function test() {
        var_dump($this->greaterThan(4, 3));
    }

    public function isGreaterThasn(int $a, int $b): bool
    {
        if ($a > $b) {
            return true;
        } else {
            return false;
        }
    }

    public function isGreaterThan123(int $a, int $b): bool
    {
        return $a > $b ? true : false;
    }

    

    public function isGreaterThan(int $a, int $b): bool
    {
        return $a > $b;
    }


}
