<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class Contacts extends Controller
{
    public function index()
    {
        return view('contacts', ['contacts' => Contact::all()]);
    }

    public function delete(Request $request) {
        foreach($request->input() as $key => $value) {
            if ($value === 'on') {
                Contact::find((int)$key)->delete();
            }
        }
        return view('contacts', ['contacts' => Contact::all()]);
    }

    public function save(Request $request)
    {
        // Todo validate

        $contact = new Contact();
        $contact->name = $request['fname'];
        $contact->email = $request['email'];
        $contact->phone = $request['phone'];
        $contact->city  = $request['city'];
        $contact->state = $request['state'];
        $contact->zip  = $request['zip'];
        $contact->save();

        return view('contacts', ['contacts' => Contact::all()]);
    }

}
