@extends('emails.email')
@section('content')

    <h1>Hello {{$learner->name}}</h1>
    <p>
        Your password has been updated successfully. <br>
        Please do not share your password publicly for security purpose.
    </p>

    <br><br>
    <p>
        Regards <br>
        {{env('APP_NAME')}}
    </p>
@endsection
