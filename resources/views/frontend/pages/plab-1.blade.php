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
                        <li><a href="#">Plab-1</a></li>
                    </ul>
                </div>

                <h1 class="page_title" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">Plab 1</h1>

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
                                <div class="text-uppercase text-center fs-5 text-dark">Plab 1</div>
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
                                    <p class="fs-5 text-white">
                                        PLAB 1 is a key step in the PLAB exam series for international medical graduates who wish to practice medicine in the UK.
                                        This exam focuses on testing your practical medical knowledge and skills, rather than just your ability to memorize facts.
                                        It includes questions that are based on the most up-to-date medical practices in the UK,
                                        using the kind of equipment you would typically find in UK hospitals.
                                    </p>
                                    <p class="fs-5 text-white">
                                        The content of the PLAB 1 exam is designed to assess your understanding of common, significant,
                                        or urgent health conditions that you're likely to encounter in your second year of the Foundation Programme,
                                        as well as how to manage ongoing health conditions commonly seen in a primary care setting.
                                        However, it does not cover the more advanced responsibilities of a general practitioner (GP).
                                    </p>

                                    <p class="fs-5 text-white">
                                        The format of PLAB 1 is a written test consisting of 180 multiple-choice questions.
                                        You will be given three hours to complete the exam. Each question begins with a brief patient scenario, followed by a question.
                                        You'll need to choose the correct answer from five options provided.
                                    </p>
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
                        <h2 class="text-primary fs-70 fw-bold">Knowledge</h2>
                    </div>
                    <div class="col-lg-7">
                        <div class="w-100 pt-5 d-flex justify-content-center">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2 mb-4 mt-5" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Clinical Presentation</h3>
                                        <p class="choose-desc">
                                            Tests your ability to recognize and interpret patient symptoms and signs.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2 mb-4" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Medical Condition</h3>
                                        <p class="choose-desc">
                                            Assesses your understanding of different diseases and their management.
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
                        <h2 class="text-primary fs-60 fw-bold">Skills or professional values and behaviours</h2>
                    </div>
                    <div class="col-lg-7">
                        <div class="w-100 pt-5 d-flex justify-content-center">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2 mb-4 mt-5" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Knowledge, skills and performance</h3>
                                        <p class="choose-desc">
                                            Evaluates your application of medical knowledge and skills in clinical practice.
                                        </p>
                                    </div>
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Safety and quality</h3>
                                        <p class="choose-desc">
                                            Focuses on practicing medicine safely and maintaining high-quality care.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2 mb-4" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Communication, partnership and teamwork</h3>
                                        <p class="choose-desc">
                                            Tests your communication skills, teamwork abilities, and patient partnership.
                                        </p>
                                    </div>
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">Maintaining trust</h3>
                                        <p class="choose-desc">
                                            Assesses professional conduct, patient confidentiality, and trust maintenance.
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
                                            How much does the PLAB 1 exam cost?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            As of April 2022, the fee for the PLAB 1 exam is £247. For a detailed breakdown of PLAB fees,
                                            <a href="https://www.gmc-uk.org/registration-and-licensing/managing-your-registration/fees-and-funding#plab" target="_blank">visit here.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            How will I be assessed in PLAB 1?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            PLAB 1 is a written exam consisting of 180 multiple-choice questions to be answered within 3 hours.
                                            Each question begins with a short patient scenario, followed by a question.
                                            You need to choose the correct answer from five options
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            When can I take the PLAB 1 exam?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            PLAB 1 is conducted four times a year in the UK and in various overseas locations.
                                            To check available locations and book a test, you need to register for a GMC Online account and look under the 'My Tests' section.
                                            The registration link is <a href="https://www.gmc-uk.org/registration-and-licensing/managing-your-registration/gmc-online">here</a>.
                                            and look under the 'My Tests' section.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            Where can I take the PLAB 1 exam?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            In the UK, the PLAB 1 exam locations include Belfast, Birmingham, Cardiff, Edinburgh, London, Manchester, Newcastle, Oxford, and Sheffield.
                                            <br>
                                            Overseas, the exams are conducted by the British Council in several locations. After booking online, contact the relevant British Council office if you don't receive venue details at least one week before the exam.
                                            <br><br>
                                            Contact details for PLAB 1 overseas venues
                                            <br>
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Country</th>
                                                    <th>City</th>
                                                    <th>Contact Details</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        Australia
                                                    </td>
                                                    <td>
                                                        Sydney
                                                    </td>
                                                    <td>
                                                        <a href="mailto:exam@britishcouncil.org.au">exam@britishcouncil.org.au</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Bangladesh
                                                    </td>
                                                    <td>
                                                        Dhaka
                                                    </td>
                                                    <td>
                                                        <a href="mailto:Fahmida.khanam@bd.britishcouncil.org">Fahmida.khanam@bd.britishcouncil.org</a>
                                                        <br>
                                                        +880 (02) 861 8905
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Canada
                                                    </td>
                                                    <td>
                                                        Toronto
                                                    </td>
                                                    <td>
                                                        <a href="mailto:CA.Exams@britishcouncil.org">CA.Exams@britishcouncil.org</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Egypt
                                                    </td>
                                                    <td>
                                                        Alexandria
                                                    </td>
                                                    <td>
                                                        <a href="mailto:information@britishcouncil.org.eg">information@britishcouncil.org.eg</a>
                                                        <br>
                                                        +20 (0) 2 19789
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Egypt
                                                    </td>
                                                    <td>
                                                        Cairo
                                                    </td>
                                                    <td>
                                                        <a href="mailto:information@britishcouncil.org.eg">information@britishcouncil.org.eg</a>
                                                        <br>
                                                        +20 2 3001666 +20 (0) 2 19789
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Ghana
                                                    </td>
                                                    <td>
                                                        Accra
                                                    </td>
                                                    <td>
                                                        <a href="mailto:infoghana@gh.britishcouncil.org">infoghana@gh.britishcouncil.org</a>
                                                        <br>
                                                        +233 (0)30 2610090
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        India
                                                    </td>
                                                    <td>
                                                        Bangalore
                                                    </td>
                                                    <td>
                                                        <a href="mailto:chennai.enquiry@in.britishcouncil.org">chennai.enquiry@in.britishcouncil.org</a>
                                                        <br>
                                                        +91 044 42050600
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        India
                                                    </td>
                                                    <td>
                                                        Chennai
                                                    </td>
                                                    <td>
                                                        <a href="mailto:chennai.enquiry@in.britishcouncil.org">chennai.enquiry@in.britishcouncil.org</a>
                                                        <br>
                                                        +91 044 42050600
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        India
                                                    </td>
                                                    <td>
                                                        Hyderabad
                                                    </td>
                                                    <td>
                                                        <a href="mailto:chennai.enquiry@in.britishcouncil.org">chennai.enquiry@in.britishcouncil.org</a>
                                                        <br>
                                                        +91 044 42050600
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        India
                                                    </td>
                                                    <td>
                                                        Kolkata
                                                    </td>
                                                    <td>
                                                        <a href="mailto:Kolkata.Customercare@in.britishcouncil.org">Kolkata.Customercare@in.britishcouncil.org</a>
                                                        <br>
                                                        +91 33 282 5370
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        India
                                                    </td>
                                                    <td>
                                                        Mumbai
                                                    </td>
                                                    <td>
                                                        <a href="mailto:mumbai.exams@in.britishcouncil.org">mumbai.exams@in.britishcouncil.org</a>
                                                        <br>
                                                        +91 22 6748 6748
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        India
                                                    </td>
                                                    <td>
                                                        New Delhi
                                                    </td>
                                                    <td>
                                                        <a href="mailto:delhi.enquiry@in.britishcouncil.org">delhi.enquiry@in.britishcouncil.org</a>
                                                        <br>
                                                        +91 11 4219 9000
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Kenya
                                                    </td>
                                                    <td>
                                                        Nairobi
                                                    </td>
                                                    <td>
                                                        <a href="mailto:information@britishcouncil.or.ke">information@britishcouncil.or.ke</a>
                                                        <br>
                                                        +254 (0)20 2836000 / +254 732 11700
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Nigeria
                                                    </td>
                                                    <td>
                                                        Abuja
                                                    </td>
                                                    <td>
                                                        <a href="mailto:info.nigeria@ng.britishcouncil.org">info.nigeria@ng.britishcouncil.org</a>
                                                        <br>
                                                        +234 (0)709 8121 548
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Nigeria
                                                    </td>
                                                    <td>
                                                        Enugu
                                                    </td>
                                                    <td>
                                                        <a href="mailto:info.nigeria@ng.britishcouncil.org">info.nigeria@ng.britishcouncil.org</a>
                                                        <br>
                                                        +234 (0)42 290 962
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Nigeria
                                                    </td>
                                                    <td>
                                                        Lagos
                                                    </td>
                                                    <td>
                                                        <a href="mailto:info.nigeria@ng.britishcouncil.org">info.nigeria@ng.britishcouncil.org</a>
                                                        <br>
                                                        +234 1 2692188 / 2692189 / 2692190 / 2692191 / 2692192
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Pakistan
                                                    </td>
                                                    <td>
                                                        Islamabad
                                                    </td>
                                                    <td>
                                                        <a href="mailto:info@britishcouncil.org.pk">info@britishcouncil.org.pk</a>
                                                        <br>
                                                        +92 51 111 424 424
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Pakistan
                                                    </td>
                                                    <td>
                                                        Karachi
                                                    </td>
                                                    <td>
                                                        <a href="mailto:info@britishcouncil.org.pk">info@britishcouncil.org.pk</a>
                                                        <br>
                                                        +92 51 111 424 424
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Republic of Ireland
                                                    </td>
                                                    <td>
                                                         Dublin
                                                    </td>
                                                    <td>
                                                        <a href="mailto:mohammad.ikbalhossain@britishcouncil.org">mohammad.ikbalhossain@britishcouncil.org</a>
                                                        <br>
                                                        00044(0)7909 097 835 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Saudi Arabia
                                                    </td>
                                                    <td>
                                                        Riyadh
                                                    </td>
                                                    <td>
                                                        <a href="mailto:KSAinfo@sa.britishcouncil.org">KSAinfo@sa.britishcouncil.org</a>
                                                        <br>
                                                        +96 612 657 6200
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        South Africa
                                                    </td>
                                                    <td>
                                                        Johannesburg
                                                    </td>
                                                    <td>
                                                        <a href="mailto:ssa.enquiries@britishcouncil.org">ssa.enquiries@britishcouncil.org</a>
                                                        <br>
                                                        +27 11 560 9300
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Spain
                                                    </td>
                                                    <td>
                                                        Madrid
                                                    </td>
                                                    <td>
                                                        <a href="mailto:UniPro@britishcouncil.es">UniPro@britishcouncil.es</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Sri Lanka
                                                    </td>
                                                    <td>
                                                        Colombo
                                                    </td>
                                                    <td>
                                                        <a href="mailto:exams.cmb@britishcouncil.org">exams.cmb@britishcouncil.org</a>
                                                        <br>
                                                        +94 4521 500
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        UAE
                                                    </td>
                                                    <td>
                                                        Dubai
                                                    </td>
                                                    <td>
                                                        <a href="mailto:mouhcine.oumri@ae.britishcouncil.org">mouhcine.oumri@ae.britishcouncil.org</a>
                                                        <br>
                                                        +971 4 3135556
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
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
