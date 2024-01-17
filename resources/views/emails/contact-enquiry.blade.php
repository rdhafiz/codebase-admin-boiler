@extends('emails.email')
@section('stylesheet')

@endsection
@section('content')

    <p>Hello,</p>
    <p>A new Contact Enquiry received!</p>
    Here are details:
    <hr>
    <p><b>Name:</b> {{$name}}</p>
    <p><b>Email:</b> {{$email}}</p>
    <p><b>Phone:</b> {{$phone}}</p>
    <p><b>How did Hear:</b> {{$how_did_you_hear}}</p>
    <p><b>Subject:</b> {{$subject}}</p>
    <p><b>Sector of Enquiry:</b> {{$enquiry_sector}}</p>
    <p><b>Allowed Marketing Communications:</b> <br>
        @foreach($marketing_communications as $communication)
            <span>{{$communication}}</span><br>
    @endforeach
    <p><b>Enquiry About:</b> {{nl2br($enquiry)}}</p>
    <p><b>Consent Receiving Marketing Correspondence:</b> {{$marketing_consent === 'on' ? 'Yes' : 'No'}}</p>
    <p><b>Consent Receiving Communication Services:</b> {{$communication_consent === 'on' ? 'Yes' : 'No'}}</p>

@endsection
