<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        $name = $request->name ?? null;
        $email = $request->email ?? null;
        $phone = $request->phone ?? null;
        $message = $request->message ?? null;
        $newContact = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
        ];
        Contact::create($newContact);
        return redirect()->back()->with("success", "Thành công");
    }
}
