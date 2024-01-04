@extends('frontend.layout.frontend-layout')

@section('css')
{{--    @vite(['resources/sass/frontend/home.scss'])--}}
@show

@section('content')

    <div class="w-100 py-5 my-5">
        <section class="container py-5 mt-5">

            <div class="row pb-lg-5">
                <div class="col-12">
                    <h1 class="display-3 fw-medium text-uppercase mb-0 text-primary">
                        International Candidates
                    </h1>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-12 pe-lg-4 pe-xl-0">

                    <!-- Post title + post meta -->
                    <h1 class="pb-2 pb-lg-3">
                        A Step-by-Step Guide to NMC registration for Overseas Nurses
                    </h1>


                    <!-- Post content -->
                    <p class="fs-lg pt-2 pt-sm-3">
                        The United Kingdom is a popular destination for international nurses and midwives to work, but before they can start practising, they must be registered with the Nursing and Midwifery Council (NMC). Every nurse, midwife, and specialist community public health nurse and nursing associate eligible to practise in the UK is included in the NMC registration database. Let us outline the 10 crucial steps an overseas nurse or midwife has to take in order to successfully apply for NMC registration and find employment in the UK.
                    </p>
                    <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">
                        Step 1: Qualification Assessment
                    </h2>
                    <p class="fs-lg mb-3">
                        For the nursing profession, the NMC requires that your credentials must be on par with a UK Level 1 nurse. This refers to a nurse who has undergone a three-year educational program, culminating in a nursing qualification and an academic degree or diploma. In the case of midwifery, your qualification must enable you to register as a midwife in the nation where you received your training.
                    </p>
                    <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">
                        Step 2: Demonstrating English Language Proficiency
                    </h2>
                    <p class="fs-lg mb-3">
                        A crucial component of the NMC registration process is proving your ability to effectively communicate in English. This includes showcasing proficiency in speaking, reading, listening, and writing. The NMC acknowledges three types of evidence:
                    </p>
                    <ul>
                        <li class="mb-1">A passing score on an English language exam recognized by the NMC.</li>
                        <li class="mb-1">A pre-registration qualification in nursing, midwifery, or nursing associates, which involved instruction and examination in English.</li>
                        <li class="mb-1">A minimum of one year's recent experience working in an English-speaking country.</li>
                    </ul>


                    <h3 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">
                        2.1 Approved English Language Exams -
                    </h3>
                    <p class="fs-lg mb-3">
                        International English Language Testing System (IELTS) - Academic.
                    </p>
                    <p class="fs-lg mb-3">
                        To meet the requirement, you must obtain an overall score of 7, with a minimum of 6.5 in writing and at least 7 in reading, listening, and speaking sections.
                    </p>
                    <p class="fs-lg mb-3">
                        The NMC permits the combination of IELTS scores from two testing sessions if:
                    </p>
                    <ul>
                        <li class="mb-1">The tests are taken within a six-month period,</li>
                        <li class="mb-1">All four sections are assessed at the same time,</li>
                        <li class="mb-1">Scores in both sessions are 6.5 or higher, and,</li>
                        <li class="mb-1">You obtain a minimum of 6.5 in writing and 7 in reading, listening, and speaking sections, achieved in either of the two test sessions.</li>
                    </ul>

                    <h3 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">
                        2.2 Approved English Language Exams -
                    </h3>
                    <p class="fs-lg mb-3">
                        Occupational English Test (OET).
                    </p>
                    <p class="fs-lg mb-3">
                        For NMC registration, an OET exam certificate will be accepted if you have attained:
                    </p>
                    <ul>
                        <li class="mb-1">A minimum of grade C+ in the writing section</li>
                        <li class="mb-1">At least a grade B in the reading, listening and speaking sections</li>
                    </ul>
                    <p class="fs-lg mb-3">
                        The NMC also permits the combination of OET scores, provided:
                    </p>
                    <ul>
                        <li class="mb-1">The tests are taken within a six-month intervals,</li>
                        <li class="mb-1">All four sections are evaluated at the same time,</li>
                        <li class="mb-1">Grades in both sessions are above grade C+, and,</li>
                        <li class="mb-1">In either of the two test instances, You obtain a minimum grade of C+ in writing and a grade B in reading, listening, and speaking sections.</li>
                    </ul>

                    <h3 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">
                        2.3 Supporting Information from Employers (SIFE)
                    </h3>
                    <p class="fs-lg mb-3">
                        Supporting Information from Employers (SIFE) is an additional pathway for evidencing English language competence for NMC registration. Eligibility extends to individuals with 12 months (or Full-Time Equivalent if part-time) of work in non-registered practice within UK health and social care settings. The scenarios for SIFE utilisation are:
                    </p>
                    <ul>
                        <li class="mb-1"><b>Training in English:</b> If you were trained in English in a country where it is not the majority spoken language, SIFE can provide evidence of your clinical interaction skills. You'll need to furnish evidence that your training and assessment were conducted in English.</li>
                        <li class="mb-1"><b>Narrowly Missed Test Score:</b> If you missed the required English test score by 0.5 (IELTS) or half a grade (OET) in one of the four language domains, having exhausted all test combining options, SIFE can be used as additional evidence for the missed language domain.</li>
                    </ul>
                    <p class="fs-lg mb-3">
                        Applicants can submit SIFE via the NMC Online application process. SIFE submission can demonstrate your listening and speaking competence in clinical interactions, especially if trained in English in a non-majority English speaking country. Additionally, it can be used to support your application if you narrowly missed the required test score in one language domain, despite exhausting all test combining options.
                    </p>
                    <p class="fs-lg mb-3">
                        <b>Evidence Submission:</b> Evidence of training and assessment in English can be in the form of a transcript from the educational institution that conducted the training, showcasing your reading and writing competence. This comprehensive evidence, along with SIFE, will holistically demonstrate your English language competence across all necessary domains for NMC registration.
                    </p>
                    <p class="fs-lg mb-3">
                        For more information, please <a target="_blank" class="text-theme-dark"
                                                        href="https://www.nmc.org.uk/registration/guidance-for-employers/sife-faqs/">visit</a>.
                    </p>


                    <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">
                        Stage 3: Self-Eligibility
                    </h2>
                    <p class="fs-lg mb-3">
                        This step involves filling out an <a target="_blank" class="text-theme-dark"
                                                             href="https://www.nmc.org.uk/registration/joining-the-register/register-nurse-midwife/trained-outside-uk/how-to-guide/check-ready/checklist-tool/nm-checklist-form/">online self-assessment form</a> to determine if you are eligible to apply for NMC registration. During this process, you must verify that you fulfil the NMC's health, good character, and English language requirements. Additionally, you need to acknowledge that you will be required to submit supporting documents as evidence later in the application process.
                    </p>
                    <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">
                        Stage 4: Test of Competence
                    </h2>
                    <p class="fs-lg mb-3">
                        After the NMC confirms your eligibility, you will be required to take the CBT (Computer-Based Test). This online exam assesses your theoretical knowledge based on practice. The test consists of multiple-choice questions and can be administered at test centres worldwide. The NMC allows three attempts at the CBT within a single application, with at least ten days between each attempt. You must pass the CBT within six months of completing your eligibility. The test provider,
                        <a target="_blank" class="text-theme-dark" href="https://home.pearsonvue.com/nmc">Pearson VUE</a>, should be contacted directly to schedule and pay for your exam. As of March 2023,
                        <a target="_blank" class="text-theme-dark" href="https://www.nmc.org.uk/registration/joining-the-register/toc/toc-2021/cbt/">the test fee is £83</a>.
                    </p>
                    <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">
                        Stage 5: Submission of Required Documents
                    </h2>
                    <p class="fs-lg mb-3">
                        Upon passing the CBT exam, you'll be requested to submit the necessary documents to support your application. The NMC requires the following:
                    </p>
                    <ul>
                        <li class="mb-1">Your valid current passport</li>
                        <li class="mb-1">Your birth certificate</li>
                        <li class="mb-1">Official qualification certificates from each country where you have practised and/or been registered</li>
                        <li class="mb-1">A police clearance certificate from every foreign country where you have lived or visited for more than three months since turning 18</li>
                        <li class="mb-1">Registration verification from each country where you have practised or previously registered</li>
                        <li class="mb-1">A completed Form to Accompany Transcript of Training (FATT) and a full transcript of your training</li>
                        <li class="mb-1">A declaration of good health from your General Practitioner or your workplace's Occupational Health Department</li>
                    </ul>
                    <div class="card border-0 bg-secondary mb-3">
                        <div class="card-body">
                            <figure>
                                <blockquote class="blockquote">
                                    <p>
                                        Keep in mind that all relevant forms are available for download from your online portal once you reach the assessment stage, but not earlier.
                                    </p>
                                </blockquote>
                                {{--                            <figcaption class="blockquote-footer">Darlene Robertson</figcaption>--}}
                            </figure>
                        </div>
                    </div>
                    <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">
                        Stage 6: Evaluating your Evidence
                    </h2>
                    <p class="fs-lg mb-3">
                        After the NMC has obtained all required documents, a representative from the International Registrations Team will evaluate your application. The assessment typically takes place within 60 calendar days from the receipt of your supporting evidence.
                    </p>
                    <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">
                        Stage 7: Qualifying for Healthcare Assistant Positions
                    </h2>
                    <p class="fs-lg mb-3">
                        Upon completion of the previous steps, you will be eligible to apply for a Band 5 Registered Nurse role. Initially, you will hold the status of a pre-registered nurse and work as a Band 3 or 4 healthcare assistant until you successfully complete your Objective Structured Clinical Examination (OSCE) After being offered a position in the UK, you can apply for your Tier 2 visa and begin your UK post. It is important to note that you must pass your
                        <a class="text-theme-dark" href="{{ route('osce') }}">OSCE</a> within 3 months of arrival.
                    </p>
                    <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">
                        Stage 8: OSCE
                    </h2>
                    <p class="fs-lg mb-3">
                        Upon arriving in the UK, you will have a three-month window to pass your OSCE exam. This examination evaluates your clinical expertise and can only be taken in the UK. The OSCE replicates a clinical setting and patient situations that all registered nurses and midwives are expected to face while assessing, planning, implementing, and evaluating care. Please visit our <a class="text-theme-dark" href="{{ route('osce') }}">OSCE training page</a> to find out more about how we can help you pass on your first attempt, saving you time, money and the stress of having to re-sit the exam.
                    </p>
                    <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">
                        Stage 9: Identity Verification
                    </h2>
                    <p class="fs-lg mb-3">
                        An in-person ID Check will be conducted at our OSCE venue on the same day as your OSCE exam. You must bring all original documents that you submitted during your application process. This includes your passport, registration certificates and UK DBS.
                    </p>
                    <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">
                        Stage 10: Begin Your Nursing Journey in the UK
                    </h2>
                    <p class="fs-lg mb-3">
                        Congratulation! With all your hard work and dedication, you are now prepared to work as a Band 6 or 7 Nurse or Midwife, contingent on your experience. Please remember that you will still need to apply for a higher-banded nursing opportunity. We are, of course, here to support you throughout this process.
                    </p>
                </div>
            </div>
        </section>
    </div>


@endsection
