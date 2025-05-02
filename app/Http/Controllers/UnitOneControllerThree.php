<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitOneControllerThree extends Controller
{
    function showNames()
    {
        return "name";
    }
    function create()
    {
        return "insert data";
    }
    function read()
    {
        return "read data";
    }
    function update()
    {
        return "update data";
    }
    function delete()
    {
        return "Delete data";
    }
}
