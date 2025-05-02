<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitOneControllerTwo extends Controller
{
    function callView1()
    {
        return view("unit1testview5");
    }

    function callView2($marks)
    {
        return view("unit1testview13", ["marks" => $marks]);
    }

    function callView3()
    {
        $colors = ["red", "blue", "green", "yellow", "black", "white"];

        return view("unit1testview15", compact("colors"));
    }
}
