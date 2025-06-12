<?php

namespace Budhaspec\Contactform\Http\Controllers;

use Budhaspec\Contactform\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Budhaspec\Contactform\Mail\InquiryEmail;

class ContactFormController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contactform::manage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|min:3|max:50',
            'lastname' => 'required|min:3|max:50',
            'email' => 'required|email|max:100|unique:contacts,email',
            'subject' => 'required|max:250',
            'message' => 'required|max:2000'
        ]);
        
        Contact::create($validated);

        $adminEmail = config("contactform.admin_email");
        if (!empty($adminEmail)) {
            Mail::to($adminEmail)->send(new InquiryEmail($validated));
        }

        return back()->with('success', 'Your inquiry has been sent!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
