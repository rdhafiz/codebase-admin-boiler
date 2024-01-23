@extends('frontend.layout.layout')

@section('stylesheet')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    @vite(['resources/sass/frontend/osce.scss'])
    @vite(['resources/sass/frontend/about.scss'])
@show

@section('content')

    <div class="osce_page">

        <div class="page_header">
            <div class="container-lg">

                <div class="bread-crumb" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li> ></li>
                        <li><a href="#">Training</a></li>
                        <li> ></li>
                        <li><a href="#">OSCE</a></li>
                    </ul>
                </div>

                <h1 class="page_title" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">OSCE</h1>

                <div class="page-quick-links">
                    <ul>
                        <li data-aos="zoom-out-left" data-aos-delay="1500"><a href="#">Apply Full Time</a></li>
                        <li data-aos="zoom-out-left" data-aos-delay="1700"><a href="#">Apply Temporary</a></li>
                        <li data-aos="zoom-out-left" data-aos-delay="1900"><a href="#">Apply Locum</a></li>
                    </ul>
                </div>

            </div>
            <div class="page_header_cover">
                <div class="angular-bar" style="background-image: url({{asset('assets/images/shapes/angular-shape-1.svg')}})"></div>
                <img src="{{asset('assets/images/frontend/home/about_us.jpg')}}" alt="">
            </div>
        </div>

        <div class="w-100 mb-5">
            <div class="container-lg">
                <div class="w-100 pt-lg-5 pt-5">
                    <h2 class="fs-2 text-primary px-3 px-lg-0 text-center">Quick Info</h2>
                </div>
                <div class="w-100 mt-5">
                    <div class="row">
                        <div class="col mb-lg-0 mb-3">
                            <div class="text-uppercase text-center fs-4 fw-bold text-primary mb-2">
                                Training
                            </div>
                            <div class="text-uppercase text-center fs-5 text-dark">OSCE</div>
                        </div>
                        <div class="col">
                            <div class="text-uppercase text-center fs-4 fw-bold text-primary mb-2">
                                Duration
                            </div>
                            <div class="text-uppercase text-center fs-5 text-dark">15 Days</div>
                        </div>
                        <div class="col">
                            <div class="text-uppercase text-center fs-4 fw-bold text-primary mb-2">Fees</div>
                            <div class="text-uppercase text-center fs-5 text-dark">£ 1,000</div>
                        </div>
                        <div class="col">
                            <div class="text-uppercase text-center fs-4 fw-bold text-primary mb-2">
                                Learning
                            </div>
                            <div class="text-uppercase text-center fs-5 text-dark">Blended</div>
                            <div class="text-uppercase text-center fs-5 text-dark">Instructor-led</div>
                        </div>
                        <div class="col">
                            <div class="text-uppercase text-center fs-4 fw-bold text-primary mb-2">
                                Access
                            </div>
                            <div class="text-uppercase text-center fs-5 text-dark">24/7</div>
                            <div class="text-uppercase text-center fs-5 text-dark">Anywhere</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="border-top border-2 border-gray-50 mt-3 mb-3"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="{{route('front.apply')}}" class="btn btn-primary">
                                Apply
                                <i class="ai-external-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-dark-olive py-5 mb-5">
            <div class="container-lg">
                <div class="about_section_content" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row align-items-center mb-3 my-sm-2 my-md-3 my-lg-0 my-xl-2 my-xxl-4">
                        <div class="col-12">
                            <div class="pe-md-4 pe-lg-0">
                                <h2 class="fs-1 fw-bold text-white pb-sm-2 pb-lg-3">Overview</h2>
                                <div class="w-100">
                                    <p class="fs-5 text-white">
                                        Are you an internationally educated nurse looking to gain your Nursing and Midwifery
                                        Council (NMC) registration and work in the UK? Our OSCE training program at Purple Med
                                        can help you achieve your goals!
                                    </p>
                                    <p class="fs-5 text-white">Imagine yourself walking into the exam room feeling confident and
                                        prepared. That's what we want for you at Purple Med. Our 15-day intensive course is
                                        designed to help you prepare for the OSCE exam and feel ready to succeed.
                                        We have a team of experienced OSCE tutors who have helped nurses from
                                        all over the world succeed in their exams. Some of them have even taken and passed the
                                        OSCE themselves, so they know what it's like and can give you helpful tips and advice.
                                        We also have the most up-to-date training materials, resources, and equipment to help
                                        you practice and improve your skills.</p>

                                    <p class="fs-5 text-white">Our main goal at Purple Med is to help you pass your OSCE the first
                                        time, saving you the time and money of having to re-sit the exam. We'll do everything we
                                        can to support you along the way, and our course is comprehensive but easy to follow.
                                        We'll make sure you understand all the requirements and feel well-prepared.
                                        Don't let the OSCE exam stand in the way of working as a nurse in the
                                        UK. Choose Purple Med for the best OSCE training and support available. Contact us today
                                        to learn more and get started on the path to success!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 py-5">
            <div class="container-lg">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-primary text-center fs-1 fw-bold">Workstations</h2>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="w-100 pt-5">
                        <div class="owl-carousel owl-theme" id="workstations-slide">
                            <div class="item">
                                <div class="card border-0 mb-4">
                                    <div style="min-height: 620px;background-color: #FF0066!important;border-radius: 10px!important;" class="card-body border-0 rounded rounded-3 text-white">
                                        <div class="fs-1 mb-5">
                                            <i class="ai-chart"></i>
                                        </div>
                                        <div class="w-100 ">
                                            <h4 class="mb-3"><a class="text-white" href="javascript:void(0)">APIE Assessment (station-1)</a></h4>
                                            <h5 class="text-white">Overview</h5>
                                            <p>Carrying out a patient centred assessment of patient’s nursing needs using activities of
                                                daily living model including accurate taking and plotting of vital signs and A to E
                                                assessment within allocated time of 20 minutes</p>
                                            <br>
                                            <h5 class="text-white">Top Tips</h5>
                                            <p class="m-0">Use holistic approach</p>
                                            <p class="m-0">Listen attentively to the patient’s problems and concerns</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 mb-4">
                                    <div style="min-height: 620px;background-color: #44BD32!important;border-radius: 10px!important;;" class="card-body border-0 rounded rounded-3 text-white">
                                        <div class="fs-1 mb-5">
                                            <i class="ai-chart"></i>
                                        </div>
                                        <div class="w-100 text-white">
                                            <h4 class="mb-3"><a class="text-white" href="javascript:void(0)">APIE Planning (station-2)</a></h4>
                                            <h5 class="text-white">Overview</h5>
                                            <p>Write 2 relevant aspects of nursing care related to the scenario from assessment station within allocated time of 14 minutes</p>
                                            <br>
                                            <h5 class="text-white">Top Tips</h5>
                                            <p class="m-0">Only write relevant and evidence based intervention – use SMART</p>
                                            <p class="m-0">Only include two most important nursing needs based on your assessment of the patient</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 mb-4">
                                    <div style="min-height: 620px;background-color: #BE2EDD!important;border-radius: 10px!important;" class="card-body border-0 rounded rounded-3 text-white">
                                        <div class="fs-1 mb-5">
                                            <i class="ai-chart"></i>
                                        </div>
                                        <div class="w-100 text-white">
                                            <h4 class="mb-3"><a class="text-white" href="javascript:void(0)">APIE Implementation (station-3)</a></h4>
                                            <h5 class="text-white">Overview</h5>
                                            <p>Administer oral drugs adhering to correct principles of drug administration and within NMC guidance and allocated time of 15 minutes</p>
                                            <br>
                                            <h5 class="text-white">Top Tips</h5>
                                            <p class="m-0">Develop a strategy to read medication administration record correctly</p>
                                            <p class="m-0">Complete the documentation accurately</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 mb-4">
                                    <div style="min-height: 620px;background-color: #4834D4!important;border-radius: 10px!important;" class="card-body border-0 rounded rounded-3 text-white">
                                        <div class="fs-1 mb-5">
                                            <i class="ai-chart"></i>
                                        </div>
                                        <div class="w-100 text-white">
                                            <h4 class="mb-3"><a class="text-white" href="javascript:void(0)">APIE Evaluation (station-4)</a></h4>
                                            <h5 class="text-white">Overview</h5>
                                            <p>Verbal handover of your patient using SBAR process within allocated time of 8 minutes</p>
                                            <br>
                                            <h5 class="text-white">Top Tips</h5>
                                            <p class="m-0">Be systematic</p>
                                            <p class="m-0">Take few minutes to make clear written notes and use them for verbal handover</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 mb-4">
                                    <div style="min-height: 620px;background-color: #FED330!important;border-radius: 10px!important;" class="card-body border-0 rounded rounded-3 text-white">
                                        <div class="fs-1 mb-5">
                                            <i class="ai-chart"></i>
                                        </div>
                                        <div class="w-100 text-white">
                                            <h4 class="mb-3"><a class="text-white" href="javascript:void(0)">PrEP Professional Values & Behaviours (station-5)</a></h4>
                                            <h5 class="text-white">Overview</h5>
                                            <p>You will read the scenario and summarise the actions that you would take, considering the professional, ethical and legal implications of this situation.</p>
                                            <br>
                                            <h5 class="text-white">Top Tips</h5>
                                            <p class="m-0">Carefully listen to the briefing before start of station</p>
                                            <p class="m-0">Always demonstrate correct use of PPE</p>
                                            <p class="m-0">Follow correct infection control practices including disposal of clinical waste</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 mb-4">
                                    <div style="min-height: 620px;background-color: #9A145D!important;border-radius: 10px!important;" class="card-body border-0 rounded rounded-3 text-white">
                                        <div class="fs-1 mb-5">
                                            <i class="ai-chart"></i>
                                        </div>
                                        <div class="w-100 text-white">
                                            <h4 class="mb-3"><a class="text-white" href="javascript:void(0)">PrEP Evidence based Practices (station-6)</a></h4>
                                            <h5 class="text-white">Overview</h5>
                                            <p>You will read the scenario and summary of the research, then write up how you would apply the findings to the scenario.</p>
                                            <br>
                                            <h5 class="text-white">Top Tips</h5>
                                            <p class="m-0">Carefully listen to the briefing before start of station</p>
                                            <p class="m-0">Always demonstrate correct use of PPE</p>
                                            <p class="m-0">Follow correct infection control practices including disposal of clinical waste</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 mb-4">
                                    <div style="min-height: 620px;background-color: #192a56!important;border-radius: 10px!important;" class="card-body border-0 rounded rounded-3 text-white">
                                        <div class="fs-1 mb-5">
                                            <i class="ai-chart"></i>
                                        </div>
                                        <div class="w-100 text-white">
                                            <h4 class="mb-3"><a class="text-white" href="javascript:void(0)">CSA Clinical Skills (station-7&8)</a></h4>
                                            <h5 class="text-white">Overview</h5>
                                            <p>You will be assessed on correctly demonstrating two clinical skills paired together from a set list of skills provided by the test centre for you to prepare. Different skills are allocated different time period.</p>
                                            <br>
                                            <h5 class="text-white">Top Tips</h5>
                                            <p class="m-0">Carefully listen to the briefing before start of station</p>
                                            <p class="m-0">Always demonstrate correct use of PPE</p>
                                            <p class="m-0">Follow correct infection control practices including disposal of clinical waste</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 mb-4">
                                    <div style="min-height: 620px;background-color: #6ab04c!important;border-radius: 10px!important;" class="card-body border-0 rounded rounded-3 text-white">
                                        <div class="fs-1 mb-5">
                                            <i class="ai-chart"></i>
                                        </div>
                                        <div class="w-100 text-white">
                                            <h4 class="mb-3"><a class="text-white" href="javascript:void(0)">CSA Clinical Skills (station-9&10)</a></h4>
                                            <h5 class="text-white">Overview</h5>
                                            <p>You will be assessed on correctly writing your actions as bullet points after reading a given scenario to test your knowledge of NMC code within allocated time of 10 minutes</p>
                                            <br>
                                            <h5 class="text-white">Top Tips</h5>
                                            <p class="m-0">Carefully read the scenario and understand its relevance to The code and write your bullet points clearly</p>
                                            <p class="m-0">Ensure you are familiar with the marking criteria set by the test centres</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about_section welcome-section bg-secondary">
            <div class="container-lg">
                <div class="about_section_content p-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row align-items-center mb-3 my-sm-2 my-md-3 my-lg-0 my-xl-2 my-xxl-4">
                        <div class="col-md-6 col-lg-6 col-xl-6 order-md-1">
                            <div class="pe-md-4 pe-lg-0">
                                <div class="w-100">
                                    <img src="{{asset('assets/images/lanada.png')}}" alt="Ariel Lanada">
                                    <h4 class="text-dark">José Ariel Lañada
                                        <a class="btn btn-sm btn-info px-2" href="https://www.linkedin.com/in/joarielan" target="_blank"><i class="ai-linkedin"></i></a>
                                    </h4>
                                </div>
                                <h2 class="h1 fw-bold text-primary pb-sm-2 pb-lg-3">Meet Your Lead Instructor</h2>
                                <p class="fs-xl pb-3 mb-1 mb-sm-2 mb-md-3 mb-lg-4">
                                    Has over 20 years of experience working in the NHS
                                    <br>
                                    Currently serves as Divisional Lead for Practice Development and Education at a major NHS Foundation Trust.
                                    <br>
                                    Responsible for overseeing the professional development and education of all non-medical staff within his division.
                                </p>
                                <p>
                                    <a href="#" class="btn btn-primary"><i class="ai-user-group me-2"></i> See All Trainers</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 order-md-2">
                            <div class="position-relative">
                                <div class="w-100">
                                    <div class="welcome-video">
                                        <video class="w-100" id="welcome-video"
                                               src="{{asset('assets/videos/welcome_message_OSCE_Training.mp4')}}"></video>
                                        <div class="welcome-play-toggle"><i class="ai-play"></i></div>
                                        <div class="welcome-pause-toggle"><i class="ai-pause"></i></div>
                                    </div>
                                </div>
                                <div class="d-none d-lg-block position-absolute top-0 end-0 translate-middle-y w-auto pe-1 me-4">
                                    <div data-aos="fade-up" data-aos-duration="950" data-aos-offset="280">
                                        <svg class="text-info" width="107" height="107" viewBox="0 0 107 107" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M106.192 53.0468C106.225 63.5385 103.146 73.8042 97.3443 82.5459C91.5426 91.2875 83.279 98.1125 73.5985 102.158C63.918 106.203 53.2553 107.287 42.9589 105.272C32.6624 103.257 23.1946 98.2343 15.7528 90.8387C8.31094 83.4431 3.22928 74.0068 1.15039 63.7231C-0.92849 53.4394 0.0887821 42.7702 4.07357 33.0647C8.05836 23.3591 14.8317 15.0531 23.537 9.19711C32.2424 3.34107 42.4887 0.197979 52.9804 0.16529L53.1457 53.2121L106.192 53.0468Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 py-5 bg-dark-olive">
            <div class="container-lg">
                <div class="row py-3">
                    <div class="col-12">
                        <h2 class="fs-1 fw-bold text-white text-center">Why Us?</h2>
                    </div>
                </div>
                <div class="row py-3 mb-5">
                    <div class="col-xl-4 col-md-6">
                        <div class="each-why-item">
                            <div class="each-why-item-content" data-aos="zoom-in" data-aos-duration="1000" style="background-image: url({{ asset('assets/images/shapes/shape-2.svg') }})">
                                <div class="d-inline-block">
                                    <h3 class="choose-title">PRACTICAL <br> BASED LEARNING</h3>
                                    <p class="choose-desc">
                                        We'll give you lots of materials to use before you come to our
                                        training sessions, both online and in person. This includes videos, slideshows, and
                                        forms to help you practice. You'll also get to try some mock exams to get a feel for
                                        what it's really like, and you'll get feedback from our teachers to help you improve.
                                        Plus, we'll give you a study guide to help you learn on your own.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="each-why-item">
                            <div class="each-why-item-content" data-aos="zoom-in" data-aos-duration="1000" style="background-image: url({{ asset('assets/images/shapes/shape-5.svg') }})">
                                <div class="d-inline-block">
                                    <h3 class="choose-title">ONLINE <br> LEARNING PLATFORM</h3>
                                    <p class="choose-desc">
                                        Even after our training sessions are over, you'll still have access
                                        to all our resources and guidelines through our online learning platform. This way, you
                                        can keep learning and practicing until you take your exam.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="each-why-item">
                            <div class="each-why-item-content" data-aos="zoom-in" data-aos-duration="1000" style="background-image: url({{ asset('assets/images/shapes/shape-3.svg') }})">
                                <div class="d-inline-block">
                                    <h3 class="choose-title">PRE-OSCE <br> EXAM SUPPORT</h3>
                                    <p class="choose-desc">
                                        We don't just stop once the training is over. We'll give you support
                                        before your exam with a mentor, our online learning platform, and a study guide with a
                                        suggested timeline. We'll also have competence tests and resit preparation to make sure
                                        you're ready to do your best on exam day.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sd-accordio-area bg-white py-5">
            <div class="container-lg">
                <div class="row py-3">
                    <div class="col-12">
                        <h2 class="fs-1 fw-bold text-primary">FAQ</h2>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-xl-12">
                        <div class="w-100">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            What is the OSCE exam?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            OSCE stands for Objective Standard Clinical Examination, which is designed
                                            to
                                            test you on your UK pre-registration practical nursing standards. The OSCE
                                            comprises ten stations, lasting around 2.5 hours in total. Each station
                                            varies
                                            between 10 to 17 minutes. Four stations will be clinical-scenario-based
                                            which
                                            will relate to the four stages of the nursing and midwifery care process:
                                            (1)
                                            Assessment-holistic patient-centered care, (2) Planning, (3)
                                            Implementation,
                                            and (4) Evaluation.
                                            The other four stations will take the form of two sets of two linked
                                            stations,
                                            testing clinical skills. Each pairing of skills stations will last for up
                                            to 20
                                            minutes in total, with a 4 minute interval.
                                            The last two stations are written. One station will specifically assess
                                            professional issues associated with accountability and the other will
                                            specifically assess critical appraisal of research evidence and associated
                                            decision-making processes.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            When do I have to sit the OSCE exam?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Once you’ve arrived in the UK your employer should enroll you on an OSCE
                                            preparation course and , you must sit your first OSCE exam within 12 weeks.
                                            You
                                            have up to 8 months and 3 attempts to pass your OSCE
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            How much is the OSCE exam?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            The full cost of the OSCE exam is £794, reduced from £992 in April 2019.
                                            The resit cost of the exam is £397 from £496.
                                            Tip – Before you book and pay for your exam, enquire to see if your NHS
                                            trust
                                            will fund your examination.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingfour">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsefour" aria-expanded="false"
                                                aria-controls="collapsefour">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            Where can I sit the OSCE exam?
                                        </button>
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            You must sit the OSCE exam in the UK and there are five approved test
                                            centres:
                                            <ul class="list-unstyled ps-5">
                                                <li><i class="fa-solid fa-building-columns"></i> Oxford Brookes
                                                    University
                                                </li>
                                                <li><i class="fa-solid fa-building-columns"></i> Ulster University</li>
                                                <li><i class="fa-solid fa-building-columns"></i> Northampton University
                                                </li>
                                                <li><i class="fa-solid fa-building-columns"></i> Northumbria University
                                                </li>
                                                <li><i class="fa-solid fa-building-columns"></i> Leeds Teaching
                                                    Hospitals NHS Trust
                                                </li>
                                            </ul>
                                            Each of the universities offer the OSCE in the different fields of nursing
                                            and
                                            midwifery
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingfive">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsefive" aria-expanded="true"
                                                aria-controls="collapsefive">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            What practical skills will I be tested against?
                                        </button>
                                    </h2>
                                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Typical skills which may be tested on their own or within a
                                            nursing/midwifery
                                            scenario include:
                                            <ul class="list-unstyled ps-5">
                                                <li><i class="fa-solid fa-user-ninja"></i> Basic life support (adult,
                                                    child and baby)
                                                </li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Intramuscular injection</li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Subcutaneous injection</li>
                                                <li><i class="fa-solid fa-user-ninja"></i> MDI= Metered Dose Inhaler
                                                </li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Peak Expiratory Flow (PEF)
                                                </li>
                                                <li><i class="fa-solid fa-user-ninja"></i> MSU & Urinalysis</li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Catheter Sample of Urine
                                                </li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Removal of Urinary Catheter
                                                </li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Safe disposal of sharps</li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Medication administrations
                                                </li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Peak flows</li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Wound care Antt (15-minutes
                                                    allocated for this skill)
                                                </li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Fluid balance</li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Hand hygiene</li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Calculating drug dosages
                                                </li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Vital signs</li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Palpation (Midwifery)</li>
                                                <li><i class="fa-solid fa-user-ninja"></i> Auscultation of foetal heart
                                                    (Midwifery)
                                                </li>
                                                <li><i class="fa-solid fa-user-ninja"></i> New born check (Midwifery)
                                                </li>
                                            </ul>
                                            Each of the universities offer the OSCE in the different fields of nursing
                                            and
                                            midwifery
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingsix">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            Will my communication skills be tested?
                                        </button>
                                    </h2>
                                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Yes. Communication is at the heart of nursing and the OSCE exam will assess
                                            your full range of communication skills (verbal, non-verbal and written).
                                            You
                                            will receive marks for:
                                            <ul class="list-unstyled ps-5">
                                                <li><i class="fa-solid fa-check"></i> Clearly explaining care,
                                                    diagnosis, investigations and/or treatments
                                                </li>
                                                <li><i class="fa-solid fa-check"></i> Involving the patient in
                                                    decision-making
                                                </li>
                                                <li><i class="fa-solid fa-check"></i> Communicating with relatives and
                                                    healthcare professionals
                                                </li>
                                                <li><i class="fa-solid fa-check"></i> Seeking and obtaining informed
                                                    consent
                                                </li>
                                                <li><i class="fa-solid fa-check"></i> Active listening</li>
                                                <li><i class="fa-solid fa-check"></i> Dealing appropriately with
                                                    anxious, upset, worried patients and their
                                                    family
                                                </li>
                                                <li><i class="fa-solid fa-check"></i> Giving clear instructions on
                                                    discharge
                                                </li>
                                                <li><i class="fa-solid fa-check"></i> Giving advice on lifestyle,
                                                    health promotion or risk factors
                                                </li>
                                                <li><i class="fa-solid fa-check"></i> Demonstrating compassion and care
                                                    during communication
                                                </li>
                                                <li><i class="fa-solid fa-check"></i> Professional behaviour</li>
                                                <li><i class="fa-solid fa-check"></i> Adhering to the NMC’s guidelines
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingseven">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseseven" aria-expanded="false"
                                                aria-controls="collapseseven">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            Mistakes to avoid
                                        </button>
                                    </h2>
                                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            <ul class="list-unstyled">
                                                <li><i class="fa-solid fa-circle-radiation"></i> Lack of communication
                                                    – verbal, non-verbal and not listening to the
                                                    patient
                                                </li>
                                                <li><i class="fa-solid fa-circle-radiation"></i> Not reading the
                                                    scenarios or instructions properly
                                                </li>
                                                <li><i class="fa-solid fa-circle-radiation"></i> Touching the patient
                                                    before conducting hand hygiene techniques
                                                </li>
                                                <li><i class="fa-solid fa-circle-radiation"></i> Not checking for
                                                    allergies
                                                </li>
                                                <li><i class="fa-solid fa-circle-radiation"></i> Not ensuring patient
                                                    safety
                                                </li>
                                                <li><i class="fa-solid fa-circle-radiation"></i> Not gaining consent
                                                    from the patient
                                                </li>
                                                <li><i class="fa-solid fa-circle-radiation"></i> Not completing the
                                                    station within the timeframe
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingeight">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseight" aria-expanded="false"
                                                aria-controls="collapseight">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            How will I be assessed?
                                        </button>
                                    </h2>
                                    <div id="collapseight" class="accordion-collapse collapse" aria-labelledby="headingeight"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Each station has a unique 20 criterion-based assessment sheet which will be
                                            matched to the scenario or skill being assessed. The criterion is mapped
                                            against the NMC’s standards for pre-registration education and the NMC
                                            Code.
                                            When it comes to your results, the NMC will email them to your personal
                                            email
                                            address within 5-days of your examination. You’ll either receive a pass, a
                                            partial fail (this requires a partial re-sit at 50% cost) or a full-fail
                                            (where
                                            you’ll be required to resit the full exam).
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingnine">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsnine" aria-expanded="false" aria-controls="collapsnine">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            Can I have my OSCE remarked?
                                        </button>
                                    </h2>
                                    <div id="collapsnine" class="accordion-collapse collapse" aria-labelledby="headingnine"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            All OSCEs are recorded, and all OSCEs deemed a fail will always be reviewed
                                            by
                                            the panel of assessors on the day of the OSCE. Failed OSCEs are
                                            automatically
                                            remarked and checked as part of the qualityassurance process.
                                            The academic lead/centre manager and administration team will co-ordinate
                                            any
                                            appeals, complaints, reasonable adjustments and fitness-to-practise issues,
                                            and
                                            will refer such matters to the test panel for investigation and reporting
                                            to
                                            the NMC
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingten">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsten" aria-expanded="false" aria-controls="collapsten">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            How do I get the results of the OSCE?
                                        </button>
                                    </h2>
                                    <div id="collapsten" class="accordion-collapse collapse" aria-labelledby="headingten"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            The NMC will inform candidates of the result of the OSCE usually within 5
                                            working days after the test is taken. In some instances, this may take up
                                            to 10
                                            working days if new OSCE content is being introduced.
                                            The NMC test of competence Part 2 is made up of ten stations, split into:
                                            <ul class="list-unstyled ps-5">
                                                <li><i class="fa-solid fa-list-ul"></i> Four scenario stations
                                                    (assessment, planning, implementation and
                                                    evaluation)
                                                </li>
                                                <li><i class="fa-solid fa-list-ul"></i> two sets of two linked skills
                                                    stations
                                                </li>
                                                <li><i class="fa-solid fa-list-ul"></i> Two written stations, one
                                                    assessing professional values and one
                                                    assessing evidence based practice.
                                                </li>
                                            </ul>
                                            If you are unsuccessful in up to seven stations, your re-sit will be
                                            charged at
                                            50% cost: £397.
                                            If you are unsuccessful in eight or more stations, your re-sit will be
                                            charged
                                            at 100% cost: £794.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingeleven">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseleven" aria-expanded="false"
                                                aria-controls="collapseleven">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            What are the potential results?
                                        </button>
                                    </h2>
                                    <div id="collapseleven" class="accordion-collapse collapse" aria-labelledby="headingeleven"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            <table class="table table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>Result</th>
                                                    <th>Description</th>
                                                    <th>Outcome</th>
                                                    <th>Cost</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>PASS</td>
                                                    <td>Passed all stations taken</td>
                                                    <td>Congratulations!
                                                        The NMC will be in touch to issue your NMC PIN.
                                                    </td>
                                                    <td>
                                                        N/A
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Fail
                                                        1–7 stations
                                                    </td>
                                                    <td>Failed up to seven stations across both the APIE and/or skill
                                                        stations
                                                    </td>
                                                    <td>Will require a re-sit at 50% cost.
                                                        You will need to re-sit only the stations you failed. If you
                                                        need
                                                        to re-sit the APIE
                                                        station(s), you will be given your original
                                                        paperwork from the APIE stations you
                                                        passed in your previous attempt, to
                                                        complete the re-sit stations in sequence.
                                                    </td>
                                                    <td>£397</td>
                                                </tr>
                                                <tr>
                                                    <td>Fail
                                                        8–10 stations
                                                    </td>
                                                    <td>Failed eight or more stations
                                                        across both the APIE and skill stations
                                                    </td>
                                                    <td>Will require a re-sit at 100% cost.
                                                        You will need to re-sit the APIE station(s)
                                                        you failed and the skill station(s) you failed. You will be
                                                        given
                                                        the same scenario and your original paperwork from the APIE
                                                        stations you passed in your previous attempt, to complete the
                                                        re-sit stations in sequence.
                                                    </td>
                                                    <td>£794</td>
                                                </tr>
                                                <tr>
                                                    <td>Full fail</td>
                                                    <td>Fail any station on the third
                                                        attempt
                                                    </td>
                                                    <td>Will require 6 months to elapse before you can reapply to the
                                                        NMC.
                                                    </td>
                                                    <td>N/A</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingtwelve">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapstwelve" aria-expanded="false"
                                                aria-controls="collapstwelve">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            What happens if I pass?
                                        </button>
                                    </h2>
                                    <div id="collapstwelve" class="accordion-collapse collapse" aria-labelledby="headingtwelve"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Your OSCE result will be uploaded to your NMC application and you will be
                                            able
                                            to continue your application for registration providing you have passed the
                                            CBT, paid your registration fee of £153 and the NMC have received your
                                            supporting declarations
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingthirteen">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsthirteen" aria-expanded="false"
                                                aria-controls="collapsthirteen">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            Can I have more than one attempt at the OSCE?
                                        </button>
                                    </h2>
                                    <div id="collapsthirteen" class="accordion-collapse collapse"
                                         aria-labelledby="headingthirteen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Candidates have three opportunities to attempt each part of the test of
                                            competence.
                                            In exceptional cases, a further attempt at each part may be offered. This
                                            attempt will be agreed only by application to the NMC. The additional
                                            attempt will be granted in situations such as the following:
                                            <ul class="list-unstyled ps-5">
                                                <li><i class="fa-solid fa-list-ul"></i> The test centre did not follow
                                                    agreed processes.
                                                </li>
                                                <li><i class="fa-solid fa-list-ul"></i> The assessor behaved in a way
                                                    that demonstrably did not comply with the agreed processes.
                                                </li>
                                                <li><i class="fa-solid fa-list-ul"></i> There was an unanticipated
                                                    interruption to the assessment, such as a fire alarm.
                                                </li>
                                                <li><i class="fa-solid fa-list-ul"></i> Illness or severe anxiety in
                                                    the candidate.
                                                </li>
                                            </ul>
                                            Candidates must wait at least 10 days between each sitting. Candidates can
                                            choose to take longer than 4 weeks between the second and final attempts.
                                            The OSCE will be passed or failed for each individual station. Re-sits will
                                            be required only for those stations the candidate failed. Re-sit candidates
                                            will take the same or a similar but different station(s) to the one(s) they
                                            failed. If the stations are not all passed in three sittings, then the
                                            whole OSCE must be re-taken.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function () {
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
            $('#workstations-slide').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: false,
                autoplay: false,
                navText: ["<i class='ai-chevron-left'></i>", "<i class='ai-chevron-right'></i>"],
                responsive: {
                    0: {
                        items: 1,
                    },
                    700: {
                        items: 2,
                    },
                    991: {
                        items: 2,
                    },
                    1200: {
                        items: 3,
                    },
                    1300: {
                        items: 3,
                    },
                }
            })
            AOS.init();
        })
    </script>
@endsection
