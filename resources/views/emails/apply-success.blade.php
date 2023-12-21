@extends('emails.email')
@section('content')

    <h1>Hello {{$learner->name}}</h1>
    <p>
        You application has been submitted successfully. <br>
        Please follow the payment procedures to complete the enrolment. If anything you need help with please contact with support team.
    </p>

    <br><br>
    <p>
        Regards <br>
        {{env('APP_NAME')}}
    </p>
@endsection
