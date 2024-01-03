@extends('frontend.layout.layout')

@section('stylesheet')
@show

@section('content')

    <div class="w-100 bg-secondary py-5 mt-5">
        <div class="w-100 py-5">
            <div class="container-lg">
                <div class="row">

                    @include('frontend.pages.profile.aside-menu')

                    <!-- Page content -->
                    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                        <h1 class="h2 mb-4">Profile Update</h1>

                        <!-- Basic info -->
                        <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                            <div class="card-body">
                                <form class="w-100" action="{{route('front.profile.update.action')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                                        <i class="ai-user text-primary lead pe-1 me-2"></i>
                                        <h2 class="h4 mb-0">Basic info</h2>
                                        <button class="btn btn-sm btn-primary ms-auto" type="submit">
                                            <i class="ai-save ms-n1 me-2"></i>
                                            Save Changes
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <a class="d-flex flex-column justify-content-end position-relative overflow-hidden rounded-circle bg-size-cover bg-position-center flex-shrink-0" href="javascript:void(0)"
                                               style="width: 80px; height: 80px; background-image: url({{asset('storage/'.auth()->user()->avatar)}});" aria-label="Upload picture">
                                              <span class="d-block text-light text-center lh-1 pb-1" style="background-color: rgba(0,0,0,.5)">
                                                <i class="ai-camera"></i>
                                              </span>
                                                <input type="file" name="avatar" style="height: 100%;width: 100%;position: absolute;top: 0;left: 0;opacity: 0">
                                            </a>
                                        </div>
                                        <div class="ps-3">
                                            <h3 class="h6 mb-1">Profile picture</h3>
                                            <p class="fs-sm text-body-secondary mb-0">PNG or JPG no bigger than 1000px wide and tall.</p>
                                        </div>
                                    </div>
                                    <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">First Name</label>
                                            <input class="form-control" type="text" placeholder="First Name" value="{{auth()->user()->first_name}}" name="first_name">
                                            @if($errors->has('first_name'))<small class="text-danger">{{$errors->first('first_name')}}</small> @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Last Name</label>
                                            <input class="form-control" type="text" placeholder="Last Name" value="{{auth()->user()->last_name}}" name="last_name">
                                            @if($errors->has('last_name'))<small class="text-danger">{{$errors->first('last_name')}}</small> @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Email Address</label>
                                            <input class="form-control" type="text" placeholder="Email Address" value="{{auth()->user()->email}}" readonly disabled>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Phone <span class="text-body-secondary">(optional)</span></label>
                                            <input class="form-control" type="tel" placeholder="Phone" value="{{auth()->user()->phone}}" name="phone">
                                            @if($errors->has('phone'))<small class="text-danger">{{$errors->first('phone')}}</small> @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Country</label>
                                            <select name="country" class="form-select" required>
                                                <option @if(auth()->user()->country == 'United Kingdom') selected @endif value="United Kingdom">United Kingdom</option>
                                                @foreach(config('countries') as $country)
                                                    <option @if(auth()->user()->country == $country) selected @endif value="{{$country}}">{{$country}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('country'))<small class="text-danger">{{$errors->first('country')}}</small> @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Gender</label>
                                            <div class="col-12 d-sm-flex align-items-center pt-sm-2 pt-md-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="gender" value="Male" id="male" @if(auth()->user()->gender == 'Male') checked @endif>
                                                    <label class="form-check-label" for="male">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="gender" value="Female" checked id="female" @if(auth()->user()->gender == 'Female') checked @endif>
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="gender" value="Other" id="other" @if(auth()->user()->gender == 'Other') checked @endif>
                                                    <label class="form-check-label" for="other">Other</label>
                                                </div>
                                            </div>
                                            @if($errors->has('gender'))<small class="text-danger">{{$errors->first('gender')}}</small> @endif
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Bio</label>
                                            <textarea class="form-control" rows="10" placeholder="Add a bio" name="bio">{!! auth()->user()->bio !!}</textarea>
                                            @if($errors->has('bio'))<small class="text-danger">{{$errors->first('bio')}}</small> @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>


                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
@endsection
