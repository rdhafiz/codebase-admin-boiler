<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactPageController extends BaseController
{
    public function viewPage()
    {
        return view("frontend.pages.contact-us");
    }

    public function submit_contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:255',
            'phone' => 'max:50',
            'how_did_you_hear' => 'string|max:90',
            'subject' => 'required|string|max:150',
            'enquiry_sector' => 'string|max:150',
            'marketing_communications' => 'max:150',
            'enquiry' => 'required|string|max:10000',
            'marketing_consent' => '',
            'communication_consent' => '',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput($request->all());
        }

        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'how_did_you_hear' => $request->get('how_did_you_hear'),
            'subject' => $request->get('subject'),
            'enquiry_sector' => $request->get('enquiry_sector'),
            'marketing_communications' => $request->get('marketing_communications'),
            'enquiry' => $request->get('enquiry'),
            'marketing_consent' => $request->get('marketing_consent'),
            'communication_consent' => $request->get('communication_consent'),
        ];
        Contact::create($data);

        // Send Mail
        Mail::send('emails.contact-enquiry', $data, function ($message) {
            $message->to(env('MAIL_ADMIN_ADDRESS'))->subject("New Contact Enquiry Request");
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });

        return redirect()->back()->with('success', 'Your enquiry received! We will admit to this as soon as possible.');
    }
}
