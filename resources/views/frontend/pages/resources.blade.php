@extends('frontend.layout.layout')

@section('stylesheet')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/sass/frontend/resources.scss'])
@show

@section('content')

    <div class="resource_page">

        <div class="page_header" style="background-image: url({{asset('assets/images/frontend/resources/wave-1.svg')}})">
            <div class="container-lg">
                <h1 class="page_title" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="1000">Resources</h1>
            </div>
        </div>

        <div class="resource_section">
            <div class="resource_bg_shadow_right bg-secondary" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="1000"></div>
            <div class="container-lg">
                <h2 class="section_title" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="1000">Overseas Nurses</h2>
                <div class="resource_section_content">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="each_resource_items green shadow" data-aos="zoom-in" data-aos-delay="2000" data-aos-duration="1000">
                                <h5>OSCE TEST of Competence</h5>
                                <p>
                                    <a class="btn btn-sm btn-secondary" href="https://purplemed.co.uk/resources-pdf/OSCE-new-test-of-competence-webinar-slides-26-november-2020.pdf">Learn More <i class="ai-external-link ms-2"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="each_resource_items red shadow" data-aos="zoom-in" data-aos-delay="2000" data-aos-duration="1000">
                                <h5>Registering as nurse from outside the EU or EEA</h5>
                                <p>
                                    <a class="btn btn-sm btn-secondary" href="https://purplemed.co.uk/resources-pdf/registering-as-a-nurse-or-midwife-from-outside-eu-or-eea.pdf">Learn More <i class="ai-external-link ms-2"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="each_resource_items blue shadow" data-aos="zoom-in" data-aos-delay="2000" data-aos-duration="1000">
                                <h5>Standards for pre-registration nursing education</h5>
                                <p>
                                    <a class="btn btn-sm btn-secondary" href="https://purplemed.co.uk/resources-pdf/nmc-standards-for-pre-registration-nursing-education.pdf">Learn More <i class="ai-external-link ms-2"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="each_resource_items choco shadow" data-aos="zoom-in" data-aos-delay="2000" data-aos-duration="1000">
                                <h5>Information for internationally trained applicants</h5>
                                <p>
                                    <a class="btn btn-sm btn-secondary" href="https://www.nmc.org.uk/registration/information-for-internationally-trained-applicants">Learn More <i class="ai-external-link ms-2"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="each_resource_items dark shadow" data-aos="zoom-in" data-aos-duration="1000">
                                <h5>Register as a nurse or midwife if you trained outside the UK</h5>
                                <p>
                                    <a class="btn btn-sm btn-secondary" href="https://www.nmc.org.uk/registration/joining-the-register/register-nurse-midwife/trained-outside-uk">Learn More <i class="ai-external-link ms-2"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="resource_section">
            <div class="resource_bg_shadow_left bg-secondary"></div>
            <div class="container-lg">
                <h2 class="section_title" data-aos="fade-right" data-aos-duration="1000">Nursing Competencies</h2>
                <div class="resource_section_content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="each_resource_items dark shadow" data-aos="zoom-in" data-aos-duration="1000">
                                <h5>CBT Test of Competence webinar slides</h5>
                                <p>
                                    <a class="btn btn-sm btn-secondary" href="https://purplemed.co.uk/resources-pdf/OSCE-new-test-of-competence-webinar-slides-26-november-2020.pdf">Learn More <i class="ai-external-link ms-2"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="each_resource_items choco shadow" data-aos="zoom-in" data-aos-duration="1000">
                                <h5>Standards of Nurse for Pre Reg Future Nurse Proficient</h5>
                                <p>
                                    <a class="btn btn-sm btn-secondary" href="https://purplemed.co.uk/resources-pdf/Standards-of-Nurse-for-Pre-Reg-future-nurse-proficiencies.pdf">Learn More <i class="ai-external-link ms-2"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="resource_section">
            <div class="resource_bg_shadow_right bg-secondary" data-aos="fade-left" data-aos-duration="1000"></div>
            <div class="container-lg">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="section_title" data-aos="fade-right" data-aos-duration="1000">NMC Preparement Material for General Nursing Domains</h2>
                    </div>
                </div>
                <div class="resource_section_content">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="each_resource_items shadow" style="background-color: #2ecc71" data-aos="zoom-in" data-aos-duration="1000">
                                <h5>Professional Values</h5>
                                <p>
                                    <a class="btn btn-sm btn-secondary" href="https://purplemed.co.uk/resources-pdf/domain-1-professional-values.pdf">Learn More <i class="ai-external-link ms-2"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="each_resource_items shadow" style="background-color: #eb3b5a" data-aos="zoom-in" data-aos-duration="1000">
                                <h5>Leadership - Team working and Management</h5>
                                <p>
                                    <a class="btn btn-sm btn-secondary" href="https://purplemed.co.uk/resources-pdf/domain-4-leadership-management-and-team-working.pdf">Learn More <i class="ai-external-link ms-2"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="each_resource_items shadow" style="background-color: #4b7bec" data-aos="zoom-in" data-aos-duration="1000">
                                <h5>Nursing Practice and Decision Making</h5>
                                <p>
                                    <a class="btn btn-sm btn-secondary" href="https://purplemed.co.uk/resources-pdf/domain-3-nursing-practice-and-decision-making.pdf">Learn More <i class="ai-external-link ms-2"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="each_resource_items shadow" style="background-color: #fed330" data-aos="zoom-in" data-aos-duration="1000">
                                <h5>Communication and Interpersonal Skills</h5>
                                <p>
                                    <a class="btn btn-sm btn-secondary" href="https://purplemed.co.uk/resources-pdf/domain-2-communication-and-interpersonal-skills.pdf">Learn More <i class="ai-external-link ms-2"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="resource_blog_section">
            <div class="resource_blog_bg_shadow_left bg-secondary" data-aos="fade-left" data-aos-duration="1000"></div>
            <div class="container-lg">
                <h2 class="section_title" data-aos="fade-right" data-aos-duration="1000">Articles</h2>
                <div class="resource_blog_content">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="each_resource_blog shadow" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="blog_cover"><img src="{{ asset('assets/images/frontend/home/nurse.jpg') }}" alt=""></div>
                                <div class="w-100 p-3">
                                    <h5 class="blog_title">
                                        Navigating the UK Healthcare System as a Filipino Nurse: Insider Tips and Advice
                                    </h5>
                                    <a class="btn btn-sm btn-primary" href="javascript:void(0)">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="each_resource_blog shadow" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="blog_cover"><img src="{{ asset('assets/images/frontend/home/nurse.jpg') }}" alt=""></div>
                                <div class="w-100 p-3">
                                    <h5 class="blog_title">
                                        Realistic Expectations for Filipino Nurses Working in the UK: Navigating
                                        Differences in Healthcare Systems and Career Advancement Opportunities
                                    </h5>
                                    <a class="btn btn-sm btn-primary" href="javascript:void(0)">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="each_resource_blog shadow" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="blog_cover"><img src="{{ asset('assets/images/frontend/home/nurse.jpg') }}" alt=""></div>
                                <div class="w-100 p-3">
                                    <h5 class="blog_title">
                                        Essential Items for Filipino Nurses Starting Work in the UK: Documents,
                                        Medications, and More
                                    </h5>
                                    <a class="btn btn-sm btn-primary" href="javascript:void(0)">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="each_resource_blog shadow" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="blog_cover"><img src="{{ asset('assets/images/frontend/home/nurse.jpg') }}" alt=""></div>
                                <div class="w-100 p-3">
                                    <h5 class="blog_title">
                                        6 reasons Why Filipino Nurses Should Choose the UK over USA
                                    </h5>
                                    <a class="btn btn-sm btn-primary" href="javascript:void(0)">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="each_resource_blog shadow" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="blog_cover"><img src="{{ asset('assets/images/frontend/home/nurse.jpg') }}" alt=""></div>
                                <div class="w-100 p-3">
                                    <h5 class="blog_title">
                                        Maximizing Your Experience as an Overseas Nurse in the UK: How the Blue
                                        Light Card Can Help You Save Money and Experience British Culture
                                    </h5>
                                    <a class="btn btn-sm btn-primary" href="javascript:void(0)">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="each_resource_blog shadow" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="blog_cover"><img src="{{ asset('assets/images/frontend/home/nurse.jpg') }}" alt=""></div>
                                <div class="w-100 p-3">
                                    <h5 class="blog_title">
                                        Mastering the Art of English: Proven Ways for Overseas Nurses to Improve
                                        Their Language Skills with Resources, Tips and Tricks
                                    </h5>
                                    <a class="btn btn-sm btn-primary" href="javascript:void(0)">Read More...</a>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $(function (){
            AOS.init();
        })
    </script>
@show
