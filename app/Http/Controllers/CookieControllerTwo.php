<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieControllerTwo extends Controller
{
    public function show(Request $request)
    {
        $userId = $request->cookie("userID");
        return view("cookiehandlingtwo", compact("userId"));
    }

    public function setCookie1()
    {
        return response()
            ->redirectToRoute('cookie1.view')
            ->cookie("userID", "Aaditya Kumar Mittal", 24 * 60);
    }
    public function updateCookie1(Request $request)
    {
        $cookieValue = $request->cookie("userID");

        if ($cookieValue) {
            return response()
                ->redirectToRoute('cookie1.view')
                ->cookie("userID", "Aaditya Mittal", 24 * 60); // Update value
        }

        return response()->redirectTORoute('cookie1.view')->with('message', 'No cookie found to update.');
    }
    public function deleteCookie1(Request $request)
    {
        if ($request->hasCookie('userID')) {
            return response()->redirectToRoute('cookie1.view')->withoutCookie('userID');
        }
        return response()->redirectTORoute('cookie1.view')->with('message', 'No cookie found to delete.');

    }
}
