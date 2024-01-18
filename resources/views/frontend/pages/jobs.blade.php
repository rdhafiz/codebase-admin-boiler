@extends('frontend.layout.layout')

@section('content')

    <div class="w-100 py-5">
        <section class="bg-body py-5 my-lg-0 mt-3">
            <div class="container py-md-2 py-lg-4 my-xl-2 my-xxl-3">

                <div class="w-100" id="vueJobBrowseInstance" style="display: none">

                    <div class="row">
                        <div class="col-lg-3">
                            <h1 class="fw-bold text-primary">Job Search</h1>
                        </div>
                        <div class="col-lg-9">
                            <input type="search" v-model="param.title" @keyup="keyTypeSlow" class="form-control form-control-lg" placeholder="Typ to search jobs (title, location) ...">
                            <div class="w-100 d-flex justify-content-start">
                                <div class="form-check my-2 mx-3">
                                    <input class="form-check-input" type="radio" id="dt-all" name="dt_type" value="all" checked>
                                    <label class="form-check-label d-flex align-items-center" for="dt-all">
                                        <span class="text-nav fw-medium">All</span>
                                    </label>
                                </div>
                                <div class="form-check my-2 mx-3">
                                    <input class="form-check-input" type="radio" id="dt-recent" name="dt_type" value="recent">
                                    <label class="form-check-label d-flex align-items-center" for="dt-recent">
                                        <span class="text-nav fw-medium">Recent</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row py-4 my-2 my-md-3 my-lg-4">
                        <div class="col-md-3 col-lg-3">
                            <div class="accordion accordion-alt pb-2 mb-4" id="accordionJobSearch">
                                <div class="accordion-item mb-0">
                                    <h5 class="accordion-header">
                                        <button class="fs-5 fw-bold px-3 bg-secondary accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJobType">
                                            Job Type
                                        </button>
                                    </h5>
                                    <div id="collapseJobType" class="accordion-collapse collapse" data-bs-parent="#accordionJobSearch">
                                        <div class="accordion-body">
                                            <div class="w-100 px-3 py-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" @change="toggleJobType('Full Time')" :checked="param.job_type.indexOf('Full Time') > -1" type="checkbox" id="jt-Full-Time" value="Full Time">
                                                    <label class="form-check-label d-flex align-items-center" for="jt-Full-Time">
                                                        <span class="fs-5 fw-medium">Full Time</span>
                                                    </label>
                                                </div>
{{--                                                <div class="form-check">--}}
{{--                                                    <input class="form-check-input" @change="toggleJobType('Part Time')" :checked="param.job_type.indexOf('Part Time') > -1" type="checkbox" id="jt-Part-Time" value="Part Time">--}}
{{--                                                    <label class="form-check-label d-flex align-items-center" for="jt-Part-Time">--}}
{{--                                                        <span class="text-nav fw-medium">Part Time</span>--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check">--}}
{{--                                                    <input class="form-check-input" @change="toggleJobType('Internship')" :checked="param.job_type.indexOf('Internship') > -1" type="checkbox" id="jt-Internship" value="Internship">--}}
{{--                                                    <label class="form-check-label d-flex align-items-center" for="jt-Internship">--}}
{{--                                                        <span class="text-nav fw-medium">Internship</span>--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" @change="toggleJobType('Temporary')" :checked="param.job_type.indexOf('Temporary') > -1" type="checkbox" id="jt-Temporary" value="Temporary">
                                                    <label class="form-check-label d-flex align-items-center" for="jt-Temporary">
                                                        <span class="fs-5 fw-medium">Temporary</span>
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" @change="toggleJobType('Locum')" :checked="param.job_type.indexOf('Locum') > -1" type="checkbox" id="jt-Locum" value="Locum">
                                                    <label class="form-check-label d-flex align-items-center" for="jt-Locum">
                                                        <span class="fs-5 fw-medium">Locum</span>
                                                    </label>
                                                </div>
                                            </div>
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
                            <div class="w-100" v-if="!loading && jobs.length > 0">
                                <p class="alert alert-info"><strong>@{{ jobs.length }}</strong> search results were found <span v-if="param.title != ''">for <strong>@{{ param.title }}</strong>.</span></p>
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
                                <h2 class="mb-2"><a :href="'/job/'+job._id">@{{ job.job_title }}</a></h2>
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
