<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{
    public function index(){
        return view('contact.index');
    }

    public function store(ContactRequest $request){
        Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'content' => $request->content,
            'user_id' => Auth::user()->id
        ]);

        return view('contact.complete');
    }
}
