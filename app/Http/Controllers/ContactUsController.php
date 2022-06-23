<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'contact_me_by_fax_only' => 'max:0',
            'my_name' => 'max:0',
            'my_title' => 'max:0',
            'parentName' => 'required',
            'studentName' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'birthdate' => 'required',
        ]);

        Mail::to('UDFdance@gmail.com')->send(new ContactUsMail($data));
//        Mail::to('customdenlie@gmail.com')->send(new ContactUsMail($data));

        return redirect('contact')->with('message', 'Thanks for your interest. We\'ll be in touch.');

    }
}
