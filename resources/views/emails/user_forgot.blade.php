@extends('emails.email')
@section('content')

    <h1>Hello {{$learner->name}}</h1>
    <p>
        Here is the six digit password reset code. <br>
        Please reset your password with this reset code and login to access your profile.
    </p>
    <h1>
        {{$learner->reset_code}}
    </h1>
    <br>

    <br><br>
    <p>
        Regards <br>
        {{env('APP_NAME')}}
    </p>
@endsection
