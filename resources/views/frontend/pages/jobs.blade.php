@extends('frontend.layout.frontend-layout')

@section('css')
    {{--    @vite(['resources/sass/frontend/home.scss'])--}}
@show

@section('content')

    <div class="w-100 py-5">
        <section class="bg-body py-5 my-lg-0 mt-3">
            <div class="container py-md-2 py-lg-4 my-xl-2 my-xxl-3">

                <div class="w-100" id="vueJobBrowseInstance" style="display: none">
                    <div class="row py-4 my-2 my-md-3 my-lg-4">
                        <div class="col-md-3 col-lg-3">
                            <h4 class="fw-medium text-primary">Job Search</h4>
                            <div class="accordion accordion-alt pb-2 mb-4" id="shopCategories">
                                <div class="accordion-item mb-0">
                                    <div class="position-relative mb-2">
                                        <i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                        <input class="form-control ps-5" type="search" v-model="param.title" @keyup="keyTypeSlow" name="title" placeholder="Job Title">
                                    </div>
                                    <div class="position-relative mb-4">
                                        <i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                        <input class="form-control ps-5" type="search" name="location" v-model="param.location" @keyup="keyTypeSlow" placeholder="Job Location">
                                    </div>

                                    <h4 class="fw-medium text-primary">Job Type</h4>
                                    <div class="w-100">
                                        <div class="form-check">
                                            <input class="form-check-input" @change="toggleJobType('Full Time')" :checked="param.job_type.indexOf('Full Time') > -1" type="checkbox" id="jt-Full-Time" value="Full Time">
                                            <label class="form-check-label d-flex align-items-center" for="jt-Full-Time">
                                                <span class="text-nav fw-medium">Full Time</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" @change="toggleJobType('Part Time')" :checked="param.job_type.indexOf('Part Time') > -1" type="checkbox" id="jt-Part-Time" value="Part Time">
                                            <label class="form-check-label d-flex align-items-center" for="jt-Part-Time">
                                                <span class="text-nav fw-medium">Part Time</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" @change="toggleJobType('Internship')" :checked="param.job_type.indexOf('Internship') > -1" type="checkbox" id="jt-Internship" value="Internship">
                                            <label class="form-check-label d-flex align-items-center" for="jt-Internship">
                                                <span class="text-nav fw-medium">Internship</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" @change="toggleJobType('Temporary')" :checked="param.job_type.indexOf('Temporary') > -1" type="checkbox" id="jt-Temporary" value="Temporary">
                                            <label class="form-check-label d-flex align-items-center" for="jt-Temporary">
                                                <span class="text-nav fw-medium">Temporary</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" @change="toggleJobType('Locum')" :checked="param.job_type.indexOf('Locum') > -1" type="checkbox" id="jt-Locum" value="Locum">
                                            <label class="form-check-label d-flex align-items-center" for="jt-Locum">
                                                <span class="text-nav fw-medium">Locum</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-9">
                            <div class="w-100" v-if="loading">
                                Searching Jobs....
                            </div>
                            <div class="w-100" v-if="!loading && jobs.length == 0">
                                <p class="alert alert-danger text-center">No job found!</p>
                            </div>
                            <div class="my-4 border-bottom" v-for="job in jobs">
                                <span class="badge mb-2"
                                      :class="{
                                      'bg-success': job.job_type == 'Full Time',
                                      'bg-info': job.job_type == 'Part Time',
                                      'bg-warning text-dark': job.job_type == 'Temporary',
                                      'bg-secondary': job.job_type == 'Locum',
                                      'bg-primary': job.job_type == 'Internship',
                                      }">@{{ job.job_type }}</span>
                                <h2 class="mb-2">@{{ job.job_title }}</h2>
                                <p class="m-0"><a class="text-decoration-none" :href="job.company_website" target="_blank">@{{ job.company_name }}</a></p>
                                <p class="d-flex align-items-center"><i class="ai-map-pin"></i> &nbsp; <span>@{{ job.location }}</span></p>
                                <p class="fs-lg mb-0 mb-lg-4">
                                    @{{ job.job_description }}...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

@endsection
@section('js')
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    @vite('resources/js/frontend/pages/jobs.js')
@endsection
