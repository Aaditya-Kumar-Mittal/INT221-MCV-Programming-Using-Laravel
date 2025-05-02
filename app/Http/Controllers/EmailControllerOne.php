<?php

namespace App\Http\Controllers;

use App\Mail\MyEmailOne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailControllerOne extends Controller
{
    public function sendEmailOne()
    {
        $toEmail = "abindra427@gmail.com";
        $message = "This is a test email from Laravel.";
        $subject = "Test Email from Laravel";
        $request = Mail::to($toEmail)->send(new MyEmailOne($message, $subject));
        dd($request);
    }
}
