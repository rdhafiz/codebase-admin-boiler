@extends('frontend.layout.layout')

@section('stylesheet')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    @vite(['resources/sass/frontend/osce.scss'])
@show

@section('content')

    <div class="osce_page">

        <div class="page_header">
            <div class="container-lg">

                <div class="bread-crumb" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li> ></li>
                        <li><a href="#">Training</a></li>
                        <li> ></li>
                        <li><a href="#">Plab-2</a></li>
                    </ul>
                </div>

                <h1 class="page_title" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">Plab 2</h1>

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
                <div class="w-100" data-aos="fade-up" data-aos-duration="1000">
                    <div class="w-100 pt-lg-5 pt-5">
                        <h2 class="fs-2 text-primary px-3 px-lg-0 text-center">Quick Info</h2>
                    </div>
                    <div class="w-100 mt-5">
                        <div class="row">
                            <div class="col mb-lg-0 mb-3">
                                <div class="text-uppercase text-center fs-4 fw-bold text-primary mb-2">
                                    Training
                                </div>
                                <div class="text-uppercase text-center fs-5 text-dark">Plab 2</div>
                            </div>
                            <div class="col">
                                <div class="text-uppercase text-center fs-4 fw-bold text-primary mb-2">
                                    Duration
                                </div>
                                <div class="text-uppercase text-center fs-5 text-dark">12 Days</div>
                            </div>
                            <div class="col">
                                <div class="text-uppercase text-center fs-4 fw-bold text-primary mb-2">Fees</div>
                                <div class="text-uppercase text-center fs-5 text-dark">£ 498</div>
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
        </div>

        <div class="page_header bg-dark-olive">
            <div class="container-lg">
                <div class="about_section_content" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row align-items-center mb-3 my-sm-2 my-md-3 my-lg-0 my-xl-2 my-xxl-4">
                        <div class="col-lg-6">
                            <div class="pe-md-4 pe-lg-0">
                                <h2 class="fs-1 fw-bold text-white pb-sm-2 pb-lg-3">Overview</h2>
                                <div class="w-100">
                                    <p class="fs-6 text-white">
                                        The PLAB 2 exam is the final step in the PLAB assessment series conducted by the General Medical Council (GMC) in the UK.
                                        It's designed as an Objective Structured Clinical Examination (OSCE) and serves as a practical test of your clinical abilities.
                                    </p>
                                    <ul class="fs-6 text-white mt-3">
                                        <li class="mb-4">
                                            <strong>Exam Format:</strong><br>
                                            PLAB 2 consists of 16 different scenarios, each lasting eight minutes.
                                            These scenarios are designed to simulate real-life medical situations,
                                            including mock consultations and acute ward settings.
                                            This format aims to provide a realistic and comprehensive assessment of your clinical skills.
                                        </li>
                                        <li class="mb-4">
                                            <strong>Scope of the Exam:</strong><br>
                                            The content of the PLAB 2 exam encompasses what a UK-trained doctor
                                            is expected to encounter on the first day of their Foundation Year Two (F2).
                                            It focuses on testing your ability to apply medical knowledge in patient care situations,
                                            rather than just your capacity to memorize and recite information.
                                        </li>
                                        <li class="mb-4">
                                            <strong>Best Practice and Evidence-Based Answers:</strong><br>
                                            In PLAB 2, all questions are based on current best practices in the UK. When responding to these scenarios,
                                            you are expected to base your answers on published evidence and standard practices,
                                            rather than on local or personal medical practices.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page_header_cover">
                <div class="angular-bar" style="background-image: url({{asset('assets/images/shapes/wave-shape-1.svg')}})"></div>
                <img src="{{asset('assets/images/banner/overview.jpg')}}" alt="">
            </div>
        </div>

        <div class="w-100 py-5">
            <div class="container-lg">
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-center">
                        <h2 class="text-primary fs-60 fw-bold">Data gathering, technical and assessment skills </h2>
                    </div>
                    <div class="col-lg-7">
                        <div class="w-100 pt-5 d-flex justify-content-center">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2 mb-4 mt-5" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">History Taking</h3>
                                        <p class="choose-desc">
                                            This involves the ability to effectively gather medical history from the patient, an essential step in diagnosing and understanding the patient's condition.
                                        </p>
                                    </div>
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Physical Examination</h3>
                                        <p class="choose-desc">
                                            This includes the skills required to conduct a thorough and accurate physical examination of the patient.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2 mb-4" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Practical Procedures</h3>
                                        <p class="choose-desc">
                                            The competence in performing basic medical procedures.
                                        </p>
                                    </div>
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Investigations Leading to Diagnosis</h3>
                                        <p class="choose-desc">
                                            The ability to select and interpret various medical investigations and tests to reach a diagnosis.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 py-5 bg-secondary">
            <div class="container-lg">
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-center">
                        <h2 class="text-primary fs-60 fw-bold">Clinical <br> Management Skills</h2>
                    </div>
                    <div class="col-lg-7">
                        <div class="w-100 pt-5 d-flex justify-content-center">

                            <div class="row">
                                <div class="col-lg-6 pt-5">
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2 mt-5" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Explaining Something to the Patient</h3>
                                        <p class="choose-desc">
                                            The skill to communicate effectively with the patient, explaining medical conditions, procedures, or treatment plans in a way that is understandable and respectful.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2 mb-4 mt-5" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Formulating a Diagnosis</h3>
                                        <p class="choose-desc">
                                            The capability to integrate information from history taking, physical examination, and investigations to arrive at a diagnosis.
                                        </p>
                                    </div>
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Formulating a Management Plan</h3>
                                        <p class="choose-desc">
                                            The ability to develop a comprehensive and appropriate management plan for the patient, including treatment, follow-up, and referral if necessary.
                                        </p>
                                    </div>
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
                    <div class="col-lg-5 d-flex align-items-center">
                        <h2 class="text-primary fs-70 fw-bold">Interpersonal skills </h2>
                    </div>
                    <div class="col-lg-7">
                        <div class="w-100 pt-5 d-flex justify-content-center">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2 mb-4 mt-5" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Approach to the Station</h3>
                                        <p class="choose-desc">
                                            How you engage with the scenario, including establishing a rapport with the patient
                                        </p>
                                    </div>
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Use of Open and Closed Questioning</h3>
                                        <p class="choose-desc">
                                            Your ability to effectively use different types of questioning to gather information and engage the patient.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2 mb-4" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Involving the Patient</h3>
                                        <p class="choose-desc">
                                            Ensuring that the patient is actively involved in their care and decision-making process.
                                        </p>
                                    </div>
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Professionalism and Ethical Principles</h3>
                                        <p class="choose-desc">
                                            Demonstrating professional behavior and understanding of ethical principles in patient care
                                        </p>
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
                                            How many parts are there in the PLAB test?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            There are two parts to the PLAB test: PLAB 1 and PLAB 2.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            How much is the PLAB 2 exam?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            As of April 2022, the fee for PLAB 2 is £906. For a detailed breakdown of PLAB fees,
                                            <a href="https://www.gmc-uk.org/registration-and-licensing/managing-your-registration/fees-and-funding#plab" target="_blank">visit this link.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            How will I be assessed in PLAB 2?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            PLAB 2 is a practical Objective Structured Clinical Exam (OSCE) consisting of 16 scenarios, each 8 minutes long. These scenarios aim to mimic real-life medical settings, such as consultations or acute wards. The total duration of the exam isn't specified by the GMC.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            When can I take the PLAB 2 exam?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            PLAB 2 test dates are available throughout the year. You can view and book dates under the 'My Tests' section of GMC Online,
                                            only after receiving your PLAB 1 results. The link is <a href="https://www.gmc-uk.org/online">here</a>.
                                            <br><br>
                                            Note that there can be a wait for a test date due to high demand.
                                            <br><br>
                                            If you have a UK job offer in the NHS that requires GMC registration or hold UK refugee status,
                                            please contact GMC at plab@gmc-uk.org and GMC will try and offer you a test place as soon as they can.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            Where can I take the PLAB 2 exam?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            PLAB 2 is conducted at two GMC Clinical Assessment Centres in Manchester, UK.
                                            <br>
                                            <p class="p-3 bg-secondary mt-3">
                                                GMC Clinical Assessment Centre <br>
                                                3 Hardman Square <br>
                                                Manchester <br>
                                                M3 3EB <br>
                                                <a href="https://goo.gl/maps/FeC2f1WnQV2qrEyA9">Find our Hardman Square address on Google Maps</a>
                                            </p>
                                            <p class="p-3 bg-secondary mt-3">
                                                GMC Clinical Assessment Centre <br>
                                                3 Hardman Street <br>
                                                Manchester <br>
                                                M3 3AW <br>
                                                <a href="https://goo.gl/maps/wbx1Q3LviXffuyTT8">Find our Hardman Street address on Google Maps</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            What is the PLAB 2 pass rate?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Over the past five years, the average PLAB 2 pass rate has been approximately 66.76%. For more information,
                                            visit the <a href="https://www.gmc-uk.org/registration-and-licensing/join-the-register/plab/recent-pass-rates-for-plab-1-and-plab-2#PLAB2">GMC's PLAB 2 pass rate page</a>.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            How do I get the results of PLAB 2 ?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Results are published within a month of your exam date.
                                            GMC will notify you via email, and you can access your results in the 'My Tests' section of GMC Online.
                                            Results are not given by phone, fax, or in person. For more details,
                                            visit <a href="https://www.gmc-uk.org/online">GMC Online</a>.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            How are examiners marking the exam?
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Each station in PLAB 2 is assessed based on performance in three domains: data gathering, clinical management, and interpersonal skills.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingNine">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            Can I get feedback after the exam?
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Yes, you will receive both quantitative and qualitative feedback on your performance.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingTen">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            Is there a fixed pass mark for each section?
                                        </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            No, each station has a variable pass mark determined by the borderline regression scoring method,
                                            which adjusts according to the difficulty of each station and each exam.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingTenn">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTenn" aria-expanded="false" aria-controls="collapseTenn">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            What do I do after passing PLAB 2 ?
                                        </button>
                                    </h2>
                                    <div id="collapseTenn" class="accordion-collapse collapse" aria-labelledby="headingTenn"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            After passing, you can apply for registration with a licence to practise within two years of passing the exam.
                                            The pass date is considered the date you took the test, not when you received the results.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingEleven">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            What if I fail PLAB 2 ?
                                        </button>
                                    </h2>
                                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            If you fail, you can reattempt the exam up to a maximum of four times,
                                            provided you meet all the requirements. After four failures, you may apply for one final
                                            attempt after demonstrating additional learning over 12 months. For more information,
                                            visit <a href="https://www.gmc-uk.org/registration-and-licensing/join-the-register/plab/plab-2-guide/are-you-eligible-for-an-additional-attempt">GMC's additional attempt guide</a>.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingEleven">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            Can I have my results checked?
                                        </button>
                                    </h2>
                                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            No, GMC no longer offers a service to manually check exam results.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingTwelve">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            Can I appeal my result?
                                        </button>
                                    </h2>
                                    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Yes, you can appeal your result. For the appeal process, visit <a href="https://www.gmc-uk.org/registration-and-licensing/join-the-register/plab/plab-2-guide/how-do-you-appeal-your-result">GMC's appeal guide</a>.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingThirteen">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            How do I appeal?
                                        </button>
                                    </h2>
                                    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Contact GMC at gmc@gmc-uk.org within ten working days of your results publication,
                                            providing a full explanation (e.g. what happened, how this adversely affected your performance,
                                            how this meets our grounds for appealing your result), and evidence related to the appeal.
                                            If late, explain why and GMC will decide if they can still consider it.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingFourteen">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            How does the GMC consider my appeal?
                                        </button>
                                    </h2>
                                    <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            If the GMC finds sufficient grounds for your appeal, your case will be reviewed by a decision maker, who will decide on an appropriate resolution and inform you in writing.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingFifteen">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            What are the potential resolutions to an appeal?
                                        </button>
                                    </h2>
                                    <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            If your appeal is upheld, potential resolutions may include annulling your result, allowing a free or additional attempt, or a combination of these. Other options may be considered at the decision maker's discretion. If your appeal is unsubstantiated or outside permitted grounds, the GMC will notify you.
                                            <br><br>
                                            * Reference: <a href="https://www.gmc-uk.org/registration-and-licensing/join-the-register/plab/plab-2-guide">https://www.gmc-uk.org/registration-and-licensing/join-the-register/plab/plab-2-guide</a>
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
                autoplay: true,
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
