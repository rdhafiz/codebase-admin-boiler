@extends('cms.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="container-lg">
            <div class="w-100 mb-4">
                <h2 class="fs-2 m-0 p-0">New Course</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('CMS.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('CMS.course.category.index')}}">Course</a></li>
                        <li class="breadcrumb-item active" aria-current="page">New Course</li>
                    </ol>
                </nav>
            </div>

            @if($errors->has('success'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <i class="fa fa-fw fa-check me-2"></i>
                    <p class="mb-0">
                        {{$errors->first('success')}}
                    </p>
                </div>
            @endif

            <div class="w-100" id="vueCourseCreateInstance">
                <form class="w-100" action="{{route('CMS.course.category.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="w-100 mt-4">
                        <div class="block block-rounded">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">New Course</h3>
                                <div class="block-options">
                                    <a href="{{route('CMS.course.category.index')}}" class="btn btn-sm btn-outline-secondary me-1">Cancel</a>
                                    <button type="submit" class="btn btn-sm btn-outline-success">Save Course</button>
                                </div>
                            </div>
                            <div class="block-content p-3 p-lg-5">

                                <div class="w-100">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Title</label>
                                                <input type="text" class="form-control" name="course_title" value="{{old('course_title')}}" placeholder="Course Title">
                                                @if($errors->has('course_title')) <small class="text-danger">{{$errors->first('course_title')}}</small> @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Category</label>
                                                <select class="form-select" name="course_category">
                                                    @foreach($courseCategory as $cat)
                                                        <option value="{{$cat['_id']}}">{{$cat['name']}}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('course_category')) <small class="text-danger">{{$errors->first('course_category')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Type</label>
                                                <select class="form-select" name="course_type">
                                                    @foreach($courseType as $type)
                                                        <option value="{{$type['_id']}}">{{$type['name']}}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('course_type')) <small class="text-danger">{{$errors->first('course_type')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Schedule</label>
                                                <select class="form-select" name="course_schedule">
                                                    @foreach($courseSchedule as $schedule)
                                                        <option value="{{$schedule['_id']}}">{{$schedule['name']}} - {{$schedule['start_date_format']}}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('course_schedule')) <small class="text-danger">{{$errors->first('course_schedule')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Price</label>
                                                <input type="text" class="form-control" name="course_title" value="{{old('course_price')}}" placeholder="Course Price">
                                                @if($errors->has('course_price')) <small class="text-danger">{{$errors->first('course_price')}}</small> @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <div class="w-100">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="course_discount" value="1" id="course_discount" @change="toggleDiscount"
                                                        :checked="param.course_discount === 1">
                                                        <label class="form-check-label" for="course_discount">
                                                            <strong>Course Discount</strong>
                                                        </label>
                                                    </div>
                                                </div>
                                                @if($errors->has('course_title')) <small class="text-danger">{{$errors->first('course_title')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-12" v-if="param.course_discount === 1">
                                            <div class="row bg-light py-5 p-3 mb-4">

                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Discount Start Date</label>
                                                        <input type="text" class="form-control" name="discount_start_date" value="{{old('discount_start_date')}}" placeholder="Discount Start Date">
                                                        @if($errors->has('discount_start_date')) <small class="text-danger">{{$errors->first('discount_start_date')}}</small> @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Discount End Date</label>
                                                        <input type="text" class="form-control" name="discount_end_date" value="{{old('discount_end_date')}}" placeholder="Discount End Date">
                                                        @if($errors->has('discount_end_date')) <small class="text-danger">{{$errors->first('discount_end_date')}}</small> @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Discount Amount</label>
                                                        <input type="text" class="form-control" name="discount_amount" value="{{old('discount_amount')}}" placeholder="Discount Amount">
                                                        @if($errors->has('discount_amount')) <small class="text-danger">{{$errors->first('discount_amount')}}</small> @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Discount Promo Code</label>
                                                        <input type="text" class="form-control" name="discount_promo_code" value="{{old('discount_promo_code')}}" placeholder="Discount Promo Code">
                                                        <div class="w-100">
                                                            <small class="text-info">If want to enable this discount for all then keep the promo code blank</small>
                                                        </div>
                                                        @if($errors->has('discount_promo_code')) <small class="text-danger">{{$errors->first('discount_promo_code')}}</small> @endif
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label mb-3">Payment Option</label>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="payment_full" value="1" id="payment_full" checked>
                                                            <label class="form-check-label" for="payment_full">
                                                                Full Payment
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="payment_instalment" value="1" id="payment_instalment" @change="togglePaymentInstalment"
                                                            :checked="param.payment_instalment === 1">
                                                            <label class="form-check-label" for="payment_instalment">
                                                                Pay in Instalment
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if($errors->has('course_title')) <small class="text-danger">{{$errors->first('course_title')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-12" v-if="param.payment_instalment === 1">
                                            <div class="w-100 bg-light p-3">
                                                <div class="w-100">
                                                    <table class="table table-bordered m-0">
                                                        <thead>
                                                        <tr>
                                                            <th>Installment</th>
                                                            <th>Day</th>
                                                            <th>Amount</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>#1</td>
                                                            <td class="p-0"><input type="text" class="form-control border-0 shadow-none" placeholder="Days"></td>
                                                            <td class="p-0"><input type="text" class="form-control border-0 shadow-none" placeholder="Payment Amount"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>#2</td>
                                                            <td class="p-0"><input type="text" class="form-control border-0 shadow-none" placeholder="Days"></td>
                                                            <td class="p-0"><input type="text" class="form-control border-0 shadow-none" placeholder="Payment Amount"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>#3</td>
                                                            <td class="p-0"><input type="text" class="form-control border-0 shadow-none" placeholder="Days"></td>
                                                            <td class="p-0"><input type="text" class="form-control border-0 shadow-none" placeholder="Payment Amount"></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="w-100 text-end mt-3">
                                                    <a class="btn btn-sm btn-outline-primary">Add New</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>

    </div>
@endsection
@section('js')
    @vite('resources/js/cms/pages/course/course-create.js')
@endsection
