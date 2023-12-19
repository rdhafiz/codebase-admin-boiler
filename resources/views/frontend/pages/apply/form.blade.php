@extends('frontend.layout.layout')

@section('stylesheet')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@show

@section('content')

    <div class="w-100 py-5 mt-5">
        <div class="w-100 py-5">
            <div class="container-lg">

                <div class="w-100 shadow border px-5 pb-5">
                    <div class="w-100 py-5">
                        <h1>Apply Now</h1>
                    </div>
                    <div class="w-100">
                        @if($errors->has('success'))
                            <p class="alert alert-success">{{$errors->first('success')}}</p>
                        @endif
                        @if($errors->has('error'))
                            <p class="alert alert-danger">{{$errors->first('error')}}</p>
                        @endif
                    </div>
                    <div class="w-100">
                        <form action="{{route('front.apply.action')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label">Choose Your OSCE Course</label>
                                        <select name="course_id" class="form-select" required>
                                            <option value="">Choose Your OSCE Course</option>
                                            @foreach($courses as $course)
                                                <option @if(old('course_id') == $course->_id) selected @endif value="{{$course->_id}}">{{$course->course_title}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('course_id'))<small class="text-danger">{{$errors->first('course_id')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label">Payment Type</label>
                                        <select name="payment_type" class="form-select" required>
                                            <option @if(old('payment_type') == 1) selected @endif value="1">Full Payment</option>
                                            <option @if(old('payment_type') == 2) selected @endif value="2">Pay in Instalment</option>
                                        </select>
                                        @if($errors->has('payment_type'))<small class="text-danger">{{$errors->first('payment_type')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label">Choose Your OSCE Training</label>
                                        <select name="course_type" class="form-select" required>
                                            @foreach($course_types as $type)
                                                <option @if(old('course_type') == $type['_id']) selected @endif value="{{$type['_id']}}">{{$type['name']}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('course_type'))<small class="text-danger">{{$errors->first('course_type')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label">Choose Training Schedule</label>
                                        <select name="schedule_id" class="form-select" required>
                                            @foreach($courses as $course)
                                                @foreach($course->course_schedules as $course_schedule)
                                                    <option @if(old('schedule_id') == $course_schedule['_id']) selected @endif value="{{$course_schedule['_id']}}">{{date('d M, Y', strtotime($course_schedule['start']))}} - {{date('d M, Y', strtotime($course_schedule['end']))}}</option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                        @if($errors->has('schedule_id'))<small class="text-danger">{{$errors->first('schedule_id')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{old('first_name')}}" required>
                                        @if($errors->has('first_name'))<small class="text-danger">{{$errors->first('first_name')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{old('last_name')}}" required>
                                        @if($errors->has('last_name'))<small class="text-danger">{{$errors->first('last_name')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label">Email Address</label>
                                        <input type="text" class="form-control" name="email" placeholder="Email Address" value="{{old('email')}}" required>
                                        @if($errors->has('email'))<small class="text-danger">{{$errors->first('email')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label">Country</label>
                                        <select name="country" class="form-select" required>
                                            <option @if(old('country') == 'United Kingdom') selected @endif value="United Kingdom">United Kingdom</option>
                                            @foreach(config('countries') as $country)
                                                <option @if(old('country') == $country) selected @endif value="{{$country}}">{{$country}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('country'))<small class="text-danger">{{$errors->first('country')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label class="form-label">Have You Taken OSCE Before?</label>
                                        <select name="have_taken_osce" class="form-select" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        @if($errors->has('have_taken_osce'))<small class="text-danger">{{$errors->first('have_taken_osce')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label class="form-label">CBT Pass Date</label>
                                        <input type="date" class="form-control" name="cbt_pass_date" id="cbt_pass_date" placeholder="CBT Pass Date" required>
                                        @if($errors->has('cbt_pass_date'))<small class="text-danger">{{$errors->first('cbt_pass_date')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label class="form-label">IELTS/OET Score (if applicable)</label>
                                        <input type="text" class="form-control" name="ielts_score" placeholder="IELTS/OET Score (optional)">
                                        @if($errors->has('ielts_score'))<small class="text-danger">{{$errors->first('ielts_score')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="agree_to_terms" value="1" id="flexCheckDefault" required>
                                            <label class="form-check-label text-primary" for="flexCheckDefault">
                                                By clicking Submit, you are agreed to our Terms of Use and Privacy Policy <br> <strong>CANCELLATIONS</strong>- Refunds are given for cancellations, up to 2 weeks before the date of training. We'll try to give an alternative date, where possible for nurses having to change dates of their exam.
                                            </label>
                                        </div>
                                        @if($errors->has('agree_to_terms'))<small class="text-danger">{{$errors->first('agree_to_terms')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group w-100 text-lg-start text-center mb-4">
                                        <img style="width: 100%;max-width: 300px" src="{{asset('assets/images/stripe-cc.png')}}" alt="Stripe CC">
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center justify-content-end">
                                    <div class="form-group w-100 text-lg-end text-center">
                                        <a href="/" class="btn btn-outline-secondary me-2">Go Back</a>
                                        <button class="btn btn-primary">Submit and Pay</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        window.onload = () => {
            flatpickr("#cbt_pass_date", {
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
            });
        }
    </script>
@endsection
