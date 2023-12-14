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
                <form id="courseForm" class="w-100" action="{{route('CMS.course.category.store')}}" method="post" enctype="multipart/form-data">
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
                                        <div class="col-lg-8">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Title</label>
                                                <input type="text" class="form-control" name="course_title" v-model="param.course_title" placeholder="Course Title">
                                                @if($errors->has('course_title')) <small class="text-danger">{{$errors->first('course_title')}}</small> @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Category</label>
                                                <select class="form-select" name="course_category" v-model="param.course_category">
                                                    <option value="">Select Course Category</option>
                                                    @foreach($courseCategory as $cat)
                                                        <option value="{{$cat['_id']}}">{{$cat['name']}}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('course_category')) <small class="text-danger">{{$errors->first('course_category')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Type</label>
                                                <select class="form-select" name="course_type" v-model="param.course_type">
                                                    <option value="">Select Course Type</option>
                                                    @foreach($courseType as $type)
                                                        <option value="{{$type['_id']}}">{{$type['name']}}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('course_type')) <small class="text-danger">{{$errors->first('course_type')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Fee</label>
                                                <input type="text" class="form-control" name="course_fee" v-model="param.course_fee" placeholder="Course Fee" @keyup="calculateInstallment" @change="calculateInstallment">
                                                @if($errors->has('course_fee')) <small class="text-danger">{{$errors->first('course_fee')}}</small> @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-lg-4">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Duration</label>
                                                <input type="text" class="form-control" name="course_duration" v-model="param.course_duration" placeholder="Course Duration" @keyup="calculateSchedule" @change="calculateSchedule">
                                                @if($errors->has('course_duration')) <small class="text-danger">{{$errors->first('course_duration')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Start Date</label>
                                                <flat-pickr v-model="param.course_start_date"
                                                            :config="dateConfig" class="form-control"
                                                            @on-change="calculateSchedule"
                                                            placeholder="Course Start Date" name="course_start_date"/>
                                                @if($errors->has('course_start_date')) <small class="text-danger">{{$errors->first('course_start_date')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course End Date</label>
                                                <flat-pickr v-model="param.course_end_date"
                                                            :config="dateConfig" class="form-control"
                                                            @on-change="calculateSchedule"
                                                            placeholder="Course End Date" name="course_end_date"/>
                                                @if($errors->has('course_end_date')) <small class="text-danger">{{$errors->first('course_end_date')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-12" v-if="param.courseSchedules.length > 0">
                                            <div class="form-group bg-light p-lg-5 p-3 mb-4">
                                                <div class="w-100">
                                                    <table class="table table-bordered m-0">
                                                        <thead>
                                                        <tr>
                                                            <th>SL</th>
                                                            <th class="text-center">Start Date</th>
                                                            <th class="text-center">End Date</th>
                                                            <td class="text-center"></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr v-for="(schedule,index) in param.courseSchedules">
                                                            <td>#@{{ index+1 }}</td>
                                                            <td class="p-0">
                                                                <flat-pickr v-model="schedule.start"
                                                                            :config="dateConfig" class="form-control m-0 border-0 shadow-none text-center"
                                                                            placeholder="Schedule Start Date" name="course_start_date"/>
                                                            </td>
                                                            <td class="p-0">
                                                                <flat-pickr v-model="schedule.end"
                                                                            :config="dateConfig" class="form-control m-0 border-0 shadow-none text-center"
                                                                            placeholder="Schedule End Date" name="course_start_date"/>
                                                            </td>
                                                            <td class="text-center"><a @click="deleteThisSchedule(index)" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="w-100 mt-3">
                                                    <a @click="addNewSchedule" class="btn btn-sm btn-outline-primary"><i class="fa fa-plus"></i> Add New</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-lg-12 col-xl-8">
                                            <div class="form-group mb-4">
                                                <label class="form-label mb-3"><strong>Payment Option</strong></label>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="payment_full" value="1" id="payment_full" checked disabled>
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
                                            </div>
                                        </div>
                                        <div class="col-lg-12" v-if="param.payment_instalment === 1">
                                            <div class="w-100 bg-light p-lg-5 p-3 mb-4">
                                                <div class="w-100">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group mb-4">
                                                                <label class="form-label">Payment Duration</label>
                                                                <input type="number" class="form-control" name="payment_instalment_duration" v-model="param.payment_instalment_duration" placeholder="Total Installment" @keyup="calculateInstallment" @change="calculateInstallment">
                                                                @if($errors->has('payment_instalment_duration')) <small class="text-danger">{{$errors->first('payment_instalment_duration')}}</small> @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group mb-4">
                                                                <label class="form-label">Total Installment</label>
                                                                <input type="number" class="form-control" name="payment_total_instalment" v-model="param.payment_total_instalment" placeholder="Total Installment" @keyup="calculateInstallment" @change="calculateInstallment">
                                                                @if($errors->has('payment_total_instalment')) <small class="text-danger">{{$errors->first('payment_total_instalment')}}</small> @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-100" v-if="param.payment_instalment_details.length > 0">
                                                    <table class="table table-bordered m-0">
                                                        <thead>
                                                        <tr>
                                                            <th>Installment</th>
                                                            <th>Day</th>
                                                            <th>Amount</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr v-for="(instalment,index) in param.payment_instalment_details">
                                                            <td>#@{{ index+1 }}</td>
                                                            <td class="p-0"><input type="text" class="form-control border-0 shadow-none" v-model="instalment.days" placeholder="Days"></td>
                                                            <td class="p-0"><input type="text" class="form-control border-0 shadow-none" v-model="instalment.amount" placeholder="Payment Amount"></td>
                                                            <td><a @click="deleteThisInstallment(index)" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label mb-3"><strong>Course Discount</strong></label>
                                                <div class="w-100">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="course_discount" value="1" id="course_discount" @change="toggleDiscount"
                                                               :checked="param.course_discount === 1">
                                                        <label class="form-check-label" for="course_discount">Enable Discount</label>
                                                    </div>
                                                </div>
                                                @if($errors->has('course_title')) <small class="text-danger">{{$errors->first('course_title')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-12" v-if="param.course_discount === 1">
                                            <div class="row bg-light p-lg-5 p-3 mb-4">

                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Discount Start Date</label>
                                                        <input type="text" class="form-control js-flatpickr" name="course_discount_start_date" v-model="param.course_discount_start_date" placeholder="Discount Start Date"
                                                               data-alt-input="true" data-date-format="Y-m-d" data-alt-format="F j, Y">
                                                        @if($errors->has('course_discount_start_date')) <small class="text-danger">{{$errors->first('course_discount_start_date')}}</small> @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Discount End Date</label>
                                                        <input type="text" class="form-control js-flatpickr" name="course_discount_end_date" v-model="param.course_discount_end_date" placeholder="Discount End Date"
                                                               data-alt-input="true" data-date-format="Y-m-d" data-alt-format="F j, Y">
                                                        @if($errors->has('course_discount_end_date')) <small class="text-danger">{{$errors->first('course_discount_end_date')}}</small> @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Discount Amount</label>
                                                        <input type="text" class="form-control" name="course_discount_amount" v-model="param.course_discount_amount" placeholder="Discount Amount">
                                                        @if($errors->has('course_discount_amount')) <small class="text-danger">{{$errors->first('course_discount_amount')}}</small> @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Discount Promo Code</label>
                                                        <input type="text" class="form-control" name="course_discount_promo_code" v-model="param.course_discount_promo_code" placeholder="Discount Promo Code">
                                                        <div class="w-100">
                                                            <small class="text-info">If want to enable this discount for all then keep the promo code blank</small>
                                                        </div>
                                                        @if($errors->has('course_discount_promo_code')) <small class="text-danger">{{$errors->first('course_discount_promo_code')}}</small> @endif
                                                    </div>
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
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('assets/js/plugins/flatpickr/flatpickr.min.css')}}" crossorigin="anonymous">
@endsection
@section('js')
    <script src="{{asset('assets/js/plugins/flatpickr/flatpickr.min.js')}}"></script>
    @vite('resources/js/cms/pages/course/course-create.js')
@endsection
