@extends('emails.email')
@section('stylesheet')
    <style>
        table{
            width: 100%;
        }
        table tr th{
            text-align: right;
            width: 150px;
            padding-right: 20px;
        }
    </style>
@endsection
@section('content')

    <h1>To whom it may concern</h1>
    <p>
        A new application has been submitted successfully. <br>
        Applicant and Curse details are as follows
    </p>
    <br>
    <table>
        <tbody>
        <tr>
            <th>Name:</th>
            <td>{{$learner->name}}</td>
        </tr>
        <tr>
            <th>Email Address:</th>
            <td>{{$learner->email}}</td>
        </tr>
        <tr>
            <th>Course:</th>
            <td>{{$application->course->course_title}}</td>
        </tr>
        <tr>
            <th>Course Type:</th>
            <td>{{$application->type->name}}</td>
        </tr>
        <tr>
            <th>Course Schedule:</th>
            <td>{{date('d M, Y', strtotime($application->schedule->start))}} to {{date('d M, Y', strtotime($application->schedule->end))}}</td>
        </tr>
        <tr>
            <th>Payment Type:</th>
            <td>{{ $application->payment_type == 1 ? 'Full Payment' : 'Payment in Installment' }}</td>
        </tr>
        <tr>
            <th>Taken OSCE Before?</th>
            <td>{{$application->have_taken_osce}}</td>
        </tr>
        <tr>
            <th>CBT Pass Date:</th>
            <td>{{date('d M, Y', strtotime($application->cbt_pass_date))}}</td>
        </tr>
        <tr>
            <th>IELTS/OET Score:</th>
            <td>{{$application->ielts_score}}</td>
        </tr>
        <tr>
            <th>Country:</th>
            <td>{{$application->country}}</td>
        </tr>
        </tbody>
    </table>
@endsection
