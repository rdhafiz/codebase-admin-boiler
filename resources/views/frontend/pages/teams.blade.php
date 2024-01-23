@extends('frontend.layout.layout')

@section('stylesheet')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    @vite(['resources/sass/frontend/osce.scss'])
    @vite(['resources/sass/frontend/about.scss'])
@show

@section('content')


    <div class="about_page">

        <div class="tp-team-area bg-secondary py-5" id="staffs">
            <div class="container-lg">
                <div class="row py-3">
                    <div class="col-12">
                        <h2 class="fs-1 fw-bold text-primary text-center">Meet the Team</h2>
                    </div>
                </div>
                <div class="row py-3">
                    @foreach(config('params.teams') as $team)
                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="tp-team-item mb-4">
                                <div class="tp-team-item__img">
                                    <img class="w-100" src="{{asset('assets/'.$team['dp'])}}" alt="">
                                </div>
                                <div class="each-staff-preview-content tp-team-item__info d-flex justify-content-between align-items-center">
                                    <div class="tp-team-item__text">
                                        <h5 class="tp-team-title">
                                            <a href="javascript:void(0)" class="each-staff-preview">{{$team['name']}}</a>
                                        </h5>
                                    </div>
                                    <div class="tp-team-item__icon">
                                        <a href="javascript:void(0)" class="each-staff-preview"><i class="fs-4 ai-external-link"></i></a>
                                        <span class="d-none staff_preview_dp">{{asset('assets/'.$team['dp'])}}</span>
                                        <span class="d-none staff_preview_name">{{$team['name']}}</span>
                                        <span class="d-none staff_preview_designation">{!! str_replace(',', '<br>', $team['designation']) !!}</span>
                                        <span class="d-none staff_preview_qualifications">{{$team['qualifications']}}</span>
                                        <span class="d-none staff_preview_employment_history">{{$team['employment_history']}}</span>
                                        <span class="d-none staff_preview_social_facebook">{{$team['social']['facebook']}}</span>
                                        <span class="d-none staff_preview_social_twitter">{{$team['social']['twitter']}}</span>
                                        <span class="d-none staff_preview_social_linkedin">{{$team['social']['linkedin']}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <!--Each Staff Modal Section-->
    <div class="modal modal-left fade" id="staff-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content rounded-0">

                <div class="modal-header">
                    <label id="staff-modal-label" class="fs-3 fw-bold text-primary">FACULTY MEMBERS</label>
                    <button type="button" class="close btn btn-sm btn-secondary px-2" data-bs-dismiss="modal" aria-label="Close"><i class="ai-cross"></i></button>
                </div>

                <div class="modal-body px-lg-5">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <div class="div-img">
                                <img class="facilitator-image img-fluid" alt="Staff" loading="lazy">
                            </div>
                            <div class="mt-4 text-center">
                                <ul class="list-unstyled row">
                                    <li class="col-2">
                                        <a class="social_facebook" target="_blank" href="#"><i class="fa-brands fa-facebook-square fa-2x text-dark"></i></a>
                                    </li>
                                    <li class="col-2">
                                        <a class="social_twitter" target="_blank" href="#"><span class="fa-brands fa-twitter-square fa-2x text-dark"></span></a>
                                    </li>
                                    <li class="col-2">
                                        <a class="social_linkedin" target="_blank" href="#"><span class="fa-brands fa-linkedin fa-2x text-dark"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9">
                            <h3 class="facilitator-name text-dark fw-bold">Facilitator Name</h3>
                            <div class="mb-lg-5 facilitator-position">Facilitator Position</div>
                            <h5 class="text-dark fw-bold">Employment History</h5>
                            <div class="facilitator-employment text-dark">Facilitator Employment History</div>
                            <br><br>
                            <h5 class="text-dark fw-bold">Qualifications</h5>
                            <div class="facilitator-qualification text-dark">Facilitator Qualifications</div>
                            <br><br><br>
                        </div>
                    </div>
                </div>

            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div>
    <!--Staffs Modal Section-->

@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // Play welcome Video
        const welcomeTriggerPlay = document.querySelector('.welcome-play-toggle');
        const welcomeTriggerPause = document.querySelector('.welcome-pause-toggle');
        const welcomeTarget = document.getElementById('welcome-video');
        welcomeTriggerPlay.addEventListener('click', function () {
            welcomeTarget.play();
            welcomeTriggerPlay.style.display = "none";
            welcomeTriggerPause.style.display = "flex";
        });
        welcomeTriggerPause.addEventListener('click', function () {
            welcomeTarget.pause();
            welcomeTriggerPlay.style.display = "flex";
            welcomeTriggerPause.style.display = "none";
        });
        welcomeTarget.addEventListener('ended', function () {
            welcomeTriggerPlay.style.display = "flex";
            welcomeTriggerPause.style.display = "none";
        });

        // keep distance for 2 header height
        const getOffsetTop = element => {
            let offsetTop = 0;
            while (element) {
                offsetTop += element.offsetTop;
                element = element.offsetParent;
            }
            return offsetTop;
        }
        document.querySelectorAll("#content-nav li a.nav-link").forEach((el) => {

            const tabsHeight = document.querySelector("#middle-menu").clientHeight;
            const topHeaderHeight = document.querySelector('header').clientHeight;

            el.addEventListener('click', (e) => {

                const targetId = el.dataset.target;

                window.scrollTo({
                    left: 0,
                    top: getOffsetTop(document.querySelector(`${targetId}`)) - (tabsHeight + topHeaderHeight),
                    behavior: 'smooth',
                });
            });
        });


        const staffModal = new bootstrap.Modal('#staff-modal', {});
        $('.each-staff-preview').on('click', (e) => {
            const mdl = $('#staff-modal');
            const parent = $(e.target).closest('.each-staff-preview-content');
            const staff = {
                dp: parent.find('.staff_preview_dp').html(),
                name: parent.find('.staff_preview_name').html(),
                designation: parent.find('.staff_preview_designation').html(),
                qualifications: parent.find('.staff_preview_qualifications').html(),
                employment_history: parent.find('.staff_preview_employment_history').html(),
                social_facebook: parent.find('.staff_preview_social_facebook').html(),
                social_twitter: parent.find('.staff_preview_social_twitter').html(),
                social_linkedin: parent.find('.staff_preview_social_linkedin').html(),
            };

            mdl.find('.facilitator-image').attr('src', staff.dp);

            mdl.find('.social_facebook').attr('href', staff.social_facebook);
            mdl.find('.social_twitter').attr('href', staff.social_twitter);
            mdl.find('.social_linkedin').attr('href', staff.social_linkedin);

            mdl.find('.facilitator-name').html(staff.name);
            mdl.find('.facilitator-position').html(staff.designation);
            mdl.find('.facilitator-employment').html(staff.employment_history);
            mdl.find('.facilitator-qualification').html(staff.qualifications);

            staffModal.show();
        });


        $('.slideLeftOsceSub').on('click', function () {
            const element = document.querySelector('.osce-sub-float-menu-content');
            element.scroll({
                left: element.scrollLeft - 300,
                behavior: 'smooth'
            });
        })
        $('.slideRightOsceSub').on('click', function () {
            const element = document.querySelector('.osce-sub-float-menu-content');
            element.scroll({
                left: element.scrollLeft + 300,
                behavior: 'smooth'
            });
        })


        $('#workstations-slide').owlCarousel({
            loop: true,
            margin:20,
            nav:true,
            dots:false,
            autoplay: true,
            navText : ["<i class='ai-chevron-left'></i>","<i class='ai-chevron-right'></i>"],
            responsive : {
                0 : {
                    items:1,
                },
                700 : {
                    items:2,
                },
                991 : {
                    items:2,
                },
                1200 : {
                    items:3,
                },
                1300 : {
                    items:3,
                },
            }
        })
    </script>
@endsection
