<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use Illuminate\Http\Request;

class MailController extends Controller
{
    function send(MailRequest $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $company = $request->input('company');
        $phone = $request->input('phone');
        $service = $request->input('service');
        $message = $request->input('message');

        $headers = "From: $email";

        $sentPayload = "
        $message for $service with the contact as $phone and company name as $company by $name
        ";

        mail("inquiry@squadtechsol.com", "Inquiry Entry", $sentPayload);

        return redirect()->back();
    }
}
