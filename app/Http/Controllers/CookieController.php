<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function show(Request $request)
    {
        $userId = $request->cookie('user_id'); // Get the cookie value

        return view('cookiehandlingone', compact('userId'));
    }

    public function setCookie()
    {
        return response()->redirectToRoute('cookie.view')
            ->cookie('user_id', '12345', 60);
    }

    public function updateCookie(Request $request)
    {
        $userId = $request->cookie('user_id');

        if ($userId) {
            return response()->redirectToRoute('cookie.view')
                ->cookie('user_id', '67890', 60); // Update value
        }

        return redirect()->route('cookie.view')->with('message', 'No cookie found to update.');
    }

    public function deleteCookie(Request $request)
    {
        if ($request->hasCookie('user_id')) {
            return response()->redirectToRoute('cookie.view')
                ->withoutCookie('user_id');
        }

        return redirect()->route('cookie.view')->with('message', 'No cookie found to delete.');
    }
}
