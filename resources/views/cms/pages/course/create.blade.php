@extends('cms.layout.layout')
@section('content')
    <div class="w-100 p-3 p-lg-5">

        <div class="container-lg">
            <div class="w-100 mb-4">
                <h2 class="fs-2 m-0 p-0">New Course</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('CMS.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('CMS.course.index')}}">Course</a></li>
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
                <form id="courseForm" @submit.prevent="submitForm" class="w-100" action="{{route('CMS.course.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="w-100 mt-4">
                        <div class="block block-rounded">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">New Course</h3>
                                <div class="block-options">
                                    <a href="{{route('CMS.course.index')}}" class="btn btn-sm btn-outline-secondary me-1">Cancel</a>
                                    <button type="submit" class="btn btn-sm btn-outline-success">Save Course</button>
                                </div>
                            </div>
                            <div class="block-content p-3 p-lg-5">

                                <div class="w-100">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Title</label>
                                                <input type="text" class="form-control" name="course_title" v-model="param.course_title" placeholder="Course Title" required>
                                                @if($errors->has('course_title')) <small class="text-danger">{{$errors->first('course_title')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Workstations</label>
                                                <input type="number" class="form-control" name="course_workstations" v-model="param.course_workstations" placeholder="Course Title" required>
                                                @if($errors->has('course_workstations')) <small class="text-danger">{{$errors->first('course_workstations')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Category</label>
                                                <select class="form-select" name="course_category" v-model="param.course_category" required>
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
                                                <select class="form-select" name="course_type" v-model="param.course_type" required>
                                                    <option value="">Select Course Type</option>
                                                    @foreach($courseType as $type)
                                                        <option value="{{$type['_id']}}">{{$type['name']}}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('course_type')) <small class="text-danger">{{$errors->first('course_type')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Fee</label>
                                                <select name="course_fee" class="form-select">
                                                    <option value="">Select Course Fee</option>
                                                    @foreach($coursePrices as $price)
                                                        <option value="{{$price['_id']}}" data-price="{{$price['price']}}">£{{$price['price']}} - {{$price['name']}}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('course_fee')) <small class="text-danger">{{$errors->first('course_fee')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Duration</label>
                                                <input type="text" class="form-control" name="course_duration" v-model="param.course_duration" placeholder="Course Duration" @keyup="calculateSchedule" @change="calculateSchedule" required>
                                                @if($errors->has('course_duration')) <small class="text-danger">{{$errors->first('course_duration')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course Start Date</label>
                                                <flat-pickr v-model="param.course_start_date"
                                                            :config="dateConfig" class="form-control"
                                                            @on-change="calculateSchedule"
                                                            placeholder="Course Start Date" name="course_start_date" required/>
                                                @if($errors->has('course_start_date')) <small class="text-danger">{{$errors->first('course_start_date')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Course End Date</label>
                                                <flat-pickr v-model="param.course_end_date"
                                                            :config="dateConfig" class="form-control"
                                                            @on-change="calculateSchedule"
                                                            placeholder="Course End Date" name="course_end_date" required/>
                                                @if($errors->has('course_end_date')) <small class="text-danger">{{$errors->first('course_end_date')}}</small> @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-12" v-if="param.course_schedules.length > 0">
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
                                                        <tr v-for="(schedule,index) in param.course_schedules">
                                                            <td>#@{{ index+1 }}</td>
                                                            <td class="p-0">
                                                                <flat-pickr v-model="schedule.start"
                                                                            @on-change="calculateThisSchedule(index)"
                                                                            :config="dateConfig" class="form-control m-0 border-0 shadow-none text-center"
                                                                            placeholder="Schedule Start Date" :name="'course_schedules['+index+'][start]'" required/>
                                                            </td>
                                                            <td class="p-0">
                                                                <flat-pickr v-model="schedule.end"
                                                                            :config="dateConfig" class="form-control m-0 border-0 shadow-none text-center"
                                                                            placeholder="Schedule End Date" :name="'course_schedules['+index+'][end]'" required/>
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
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-label bg-light p-3 w-100"><strong>Payment Option</strong></label>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-check my-3">
                                                            <input class="form-check-input" type="checkbox" name="payment_full" value="1" id="payment_full" checked disabled>
                                                            <label class="form-check-label" for="payment_full">
                                                                Full Payment
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-check my-3">
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
                                            <div class="w-100 bg-light p-3 mb-4">
                                                <div class="w-100">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group mb-2">
                                                                <label class="form-label">Payment Duration</label>
                                                                <input type="number" class="form-control" name="payment_instalment_duration" v-model="param.payment_instalment_duration" placeholder="Total Installment" @keyup="calculateInstallment" @change="calculateInstallment" required>
                                                                @if($errors->has('payment_instalment_duration')) <small class="text-danger">{{$errors->first('payment_instalment_duration')}}</small> @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group mb-2">
                                                                <label class="form-label">Total Installment</label>
                                                                <input type="number" class="form-control" name="payment_total_instalment" v-model="param.payment_total_instalment" placeholder="Total Installment" @keyup="calculateInstallment" @change="calculateInstallment" required>
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
                                                            <th class="text-center">Day</th>
                                                            <th class="text-center">Amount</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr v-for="(instalment,index) in param.payment_instalment_details">
                                                            <td>#@{{ index+1 }}</td>
                                                            <td class="p-0"><input type="text" class="form-control border-0 shadow-none text-center" v-model="instalment.days" placeholder="Days" :name="'payment_instalment_details['+index+'][days]'"></td>
                                                            <td class="p-0">
                                                                <select v-model="instalment.amount" :name="'payment_instalment_details['+index+'][price_id]'" class="form-select border-0 shadow-none text-center">
                                                                    <option value="">Select Installment Fee</option>
                                                                    <option v-for="price in coursePrices" :value="price._id">£ @{{ price.price }} - @{{ price.name}}</option>
                                                                </select>
                                                            </td>
                                                            <td class="text-center"><a @click="deleteThisInstallment(index)" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <p class="alert alert-warning mt-2 mb-0" v-if="installmentTotalPriceExceed > 0">Your installment amount exceeds the total course fee</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-4">
                                                <label class="form-label bg-light p-3 w-100 m-0"><strong>Course Overview</strong></label>
                                                <textarea id="js-ckeditor" name="course_overview" class="form-control">{{ old('course_overview') }}</textarea>
                                                @if($errors->has('course_overview'))
                                                    <small class="text-danger">{{$errors->first('course_overview')}}</small>
                                                @endif
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
    <script type="application/javascript" src="{{asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script>
    <script type="application/javascript" src="{{asset('assets/js/plugins/flatpickr/flatpickr.min.js')}}"></script>
    <script>
        window.coursePrices = {!! json_encode($coursePrices, true) !!}
    </script>
    @vite('resources/js/cms/pages/course/course-create.js')
@endsection
