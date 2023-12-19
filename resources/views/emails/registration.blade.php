@extends('emails.email')
@section('content')

    <h1>Hello {{$learner->name}}</h1>
    <p>
        You account has been registered successfully. <br>
        Please <a href="{{route('front.apply')}}">login</a> with the following credentials and reset your temporary password.
    </p>
    <p>
        <strong>Email Address: </strong> {{$learner->email}} <br>
        <strong>Password: </strong> {{$password}}
    </p>
    <br>
    <p>
        <a href="{{route('front.apply')}}" class="btn-theme">Login Now</a>
    </p>
    <br><br>
    <p>
        Regards <br>
        {{env('APP_NAME')}}
    </p>
@endsection
