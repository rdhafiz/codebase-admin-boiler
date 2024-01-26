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
                        <li><a href="#">CBT</a></li>
                    </ul>
                </div>

                <h1 class="page_title" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">CBT</h1>

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
                                <div class="text-uppercase text-center fs-5 text-dark">CBT</div>
                            </div>
                            <div class="col">
                                <div class="text-uppercase text-center fs-4 fw-bold text-primary mb-2">
                                    Duration
                                </div>
                                <div class="text-uppercase text-center fs-5 text-dark">10 Days</div>
                            </div>
                            <div class="col">
                                <div class="text-uppercase text-center fs-4 fw-bold text-primary mb-2">Fees</div>
                                <div class="text-uppercase text-center fs-5 text-dark">£ 199</div>
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
                                        The CBT is a key assessment for those looking to practice Nursing or Midwifery in the UK.
                                        It's divided into two parts (Part A and Part B) and aligns with the current standards for pre-registration education.
                                        The test is designed to evaluate the essential knowledge, skills,
                                        and attitudes needed for safe and effective practice in the UK.
                                    </p>
                                    <ul class="fs-5 text-white mt-3">
                                        <li class="mb-4">
                                            <strong>Part A – Numeracy Ability Assessment:</strong><br>
                                            This section consists of 15 numeracy questions.
                                            You will need to provide one answer for each question.
                                            The questions cover various areas such as measurements, metric units, oral medications, injections, IV therapies, and fluid balance.
                                            You will have approximately 30 minutes to complete this part.
                                        </li>
                                        <li class="mb-4">
                                            <strong>Part B – Clinical Ability Assessment:</strong><br>
                                            This part includes 100 multiple-choice questions, with one answer required for each question.
                                            Each question is scored as either correct or incorrect, with no partial credit given.
                                            You will have 2 hours and 30 minutes to finish this section.
                                            The CBT is available at Pearson VUE test centers, which are located in many countries worldwide.
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
                        <h2 class="text-primary fs-70 fw-bold">CBT Structure</h2>
                    </div>
                    <div class="col-lg-7">
                        <div class="w-100 pt-5 d-flex justify-content-center">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2 mb-4 mt-5" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">PART A: <br> Numeracy</h3>
                                        <p class="choose-desc">
                                            Consist of 15 questions, focused on key numeracy skills required in healthcare, including medication dosage calculations and metric units. The duration is 30 minutes.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="each-sqr-item shadow border p-5 rounded rounded-2 mb-4" data-aos="zoom-in" data-aos-duration="1000" style="">
                                        <h3 class="choose-title">PART B: <br> Clinical</h3>
                                        <p class="choose-desc">
                                            Consist of 100 multiple-choice questions assessing broad clinical knowledge relevant to nursing and midwifery in the UK. The test duration is 2 hours and 30 minutes.
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
                                            How much is the CBT exam?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            The fee for sitting both parts (Part A and Part B) of the CBT is £83. Resit fees vary:
                                            <br><br>
                                            <ul>
                                                <li>Resit both Part A and B: £83</li>
                                                <li>Resit Part A only: £50</li>
                                                <li>Resit Part B only: £70</li>
                                            </ul>
                                            For more details, visit <a href="https://www.nmc.org.uk/registration/joining-the-register/toc/toc-2021/cbt/">NMC's CBT fee page</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            How can I book my CBT exam?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            After NMC verifies your qualifications and issues an Authorisation to Test (ATT) via email, Pearson Vue will send you an email to create an account for booking the exam. For Test of Competence for return to practice, book through your NMC Online account. Pearson Vue's website is <a href="https://home.pearsonvue.com/nmc">here</a>.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            Do I need to show my identity at the test centre?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Yes, you must present your valid passport at the test centre for identity verification. It should be the same passport as in your NMC Online account. If you have a new passport, contact NMC to update the information.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            How can I select the right exam and modules?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Carefully choose the exam that matches your application type to avoid having to retake the exam.
                                            The exam codes are specific to each nursing or midwifery field.
                                            The exam codes that match each application type are:
                                            <br><br>
                                            <ul>
                                                <li>Adult nurse – RNA</li>
                                                <li>Mental health nurse - RNMH</li>
                                                <li>Learning disabilities nurse - RNLD</li>
                                                <li>Children’s nurse - RNC</li>
                                                <li>Midwife - RM</li>
                                            </ul>
                                            For example, if you’re applying to the adult nursing part of our register you should select:
                                            <br><br>
                                            <ul>
                                                <li>Exam: RNA 2021: Adult nurse</li>
                                                <li>Module 1: RNA 2021: Adult nurse - Part A: Numeracy only</li>
                                                <li>Module 2: RNA 2021: Adult nurse - Part B: Clinical only</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            When will I receive my results?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Results for each part (Part A and Part B) are available immediately after the test and within 48 hours in your Pearson Vue account. NMC Online updates within 48 hours too, showing an overall result. NMC doesn't provide further feedback to maintain test integrity.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            If I fail, when can I re-take the CBT?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            You can re-take only the part you failed. You have three attempts within one year, with a minimum of 10 days between each sitting. After three failed attempts, your application closes, and you must wait six months to reapply and sit the CBT again.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items bg-white p-3 p-lg-4 mb-4 rounded rounded-3 shadow">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="border-0 bg-white w-100 text-start fs-5 fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            <i class="fs-1 ai-chevron-down"></i>
                                            What do I do after passing the CBT ?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-3 py-3 fs-6 fs-lg-5 border-top">
                                            Once you've passed the CBT, provide a screenshot of your NMC portal confirming your pass,
                                            and the next steps for your arrival in the UK will be initiated.
                                            <br><br>
                                            For more detailed information and updates, please refer to the NMC's CBT information page.
                                            <br><br>
                                            Reference: <a href="https://www.nmc.org.uk/registration/joining-the-register/toc/toc-2021/cbt/">https://www.nmc.org.uk/registration/joining-the-register/toc/toc-2021/cbt/</a>
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
