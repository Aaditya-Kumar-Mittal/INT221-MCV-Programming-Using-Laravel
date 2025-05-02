<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitOneControllerOne extends Controller
{
    public function greetings($name)
    {
        return view('unit1testview12', ['name' => $name]);
    }
}
