@extends('layouts.website')

@section('content')

<section class="site-section bg-light hero-area">
    <div class="hero-overlay"></div>
    <div class="container-fluid p-0">
        <div class="row align-items-stretch retro-layout-2">
            <div class="col-lg-12">
                <div class="hero-bg">
                    <img class="img-fluid w-100" src="{{ asset('uploads/bg/hero-bg-3.jpg')}}" class="" alt="">
                    <div class="hero-text-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 m-auto d-flex align-items-center" data-aos="fade-right">
                                    <div class="hero-text ">
                                        <div class="txt1">
                                            <h6>Get Hired by Higher Class Company Inside The Gulf Countries with VISA
                                            </h6>
                                        </div>
                                        <div class="txt2">
                                            <h1>Search Your Dream Jobs & Get It</h1>
                                        </div>
                                        <div class="txt3">
                                            <p>If your are selected for any job by a company through online interview,
                                                you will get VISA.</p>
                                        </div>
                                        <div class="conter-grid">
                                            <div class="counter-seprator">
                                                <div class="counter-box">
                                                    <div class="d-flex justify-content-center">
                                                        <h5 class="counter-stats">500</h5>
                                                    </div>
                                                    <h3 class="count-title">Recent Jobs</h3>
                                                </div>
                                            </div>
                                            <div class="counter-seprator">
                                                <div class="counter-box">
                                                    <div class="d-flex justify-content-center">
                                                        <h5 class="counter-stats">3</h5>
                                                    </div>
                                                    <h3 class="count-title">Under Processing </h3>
                                                </div>
                                            </div>
                                            <div class="counter-seprator">
                                                <div class="counter-box">
                                                    <div class="d-flex justify-content-center">
                                                        <h5 class="counter-stats">1</h5>
                                                    </div>
                                                    <h3 class="count-title">Already Get Jobs</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-5 d-flex justify-content-end" data-aos="fade-left">
                                    <div class="search-filde">
                                        <div class="search-box">
                                            <h2>Get Hired-Search..here</h2>
                                            <form action="#" method="POST" role="form">
                                                <div class="form-group">
                                                    <input type="search" class="form-control"
                                                        placeholder="Search by Job Title">
                                                </div>
                                                <div class="form-group">
                                                    <div class="select-style">
                                                        <select class="form-control">
                                                            <option>Service Type</option>
                                                            <option>Construction</option>
                                                            <option>Electricity Technician</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="select-style">
                                                        <select class="form-control">
                                                            <option>Select Location</option>
                                                            <option>Saudi Arabia</option>
                                                            <option>Electricity Technician</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn"><i
                                                        class="fa-solid fa-magnifying-glass"></i>Search</button>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-us-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-bordered animation fadeInUp animation-visible" data-animation="fadeInUp"
                    data-animation-delay="0">
                    <h2><span class="line line__left"></span>Who Are We and What do we do?<span
                            class="line line__right"></span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-us-img-wrap " data-aos="fade-up">
                    <img class="img-fluid w-100 h-100" src="{{ asset('uploads/bg/Wafid_Helping_team.webp')}}" class=""
                        alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-flex align-items-center">
                <div class="about-us-text" data-aos="fade-left">
                    <h5 class="mb-2">About US</h5>
                    <p>We are a job service platform agency that connects skilled workers from around the world with
                        renowned companies in the Gulf countries. Our mission is to empower workers to access global
                        employment opportunities while providing businesses with the best talent from around the world.
                        With our extensive network and expertise in offshore staffing, we help companies and workers
                        alike navigate the complexities of international employment and achieve their goals. Our
                        commitment to quality and professionalism is unwavering, and we strive to build long-term
                        partnerships that benefit everyone involved.</p>
                    <!-- <h6 class="section-title text-start mb-4">About Us</h6>
                    <h5 class="mb-2">What We do<span>?</span></h5>
                    <p class="mb-3">{{ $about_us_seetings->we_do_content }}</p>
                    <h5 class="mb-2">For <span>Candidates</span></h5>
                    <p class="mb-3">{{ $about_us_seetings->candidates_content }}</p>
                    <h5 class="mb-2">For <span>Employers</span></h5>
                    <p class="mb-3">{{ $about_us_seetings->employers_content }}</p> -->
                    {{-- <div class="read-more-btn">
                        <a class="btn" href="#">Read More</a>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 d-flex align-items-center">
                <div class="about-us-text" data-aos="fade-left">
                    <h5 class="mb-2">For Candidates</h5>
                    <p>We are offering thousands of job vacancies in the The Gulf Countries
                        and connecting candidates with higher-class companies with less expenses VISA processing. Our
                        agency connects skilled labor and white-collar workers with career opportunities in the Gulf
                        region by partnering with renowned companies and leveraging our expertise in international
                        employment. We provide comprehensive support throughout the recruitment process, including
                        resume and interview preparation and contract negotiations. Our goal is to help job seekers
                        achieve their career aspirations and succeed in their professional journey</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-us-img-wrap " data-aos="fade-up">
                    <img class="img-fluid w-100 h-100" src="{{ asset('uploads/bg/depositphotos.webp')}}" class=""
                        alt="">
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6">
                <div class="about-us-img-wrap " data-aos="fade-up">
                    <img class="img-fluid w-100 h-100" src="{{ asset('uploads/bg/interview-for-job-1.webp')}}" class=""
                        alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-flex align-items-center">
                <div class="about-us-text" data-aos="fade-left">
                    <h5 class="mb-2">For Employers</h5>
                    <p>We are offering thousands of candidates around the world with different qualifications to select
                        and contact the appropriate professional candidate as you need. You can see candidates CV and
                        make interviews through our website to get your desired candidate for your business success.We
                        have a vast network and expertise in global employment to provide exceptional service to our
                        clients and to manage the entire recruitment process. Our goal is to help businesses find the
                        right employee quickly and efficiently, whether they are looking for skilled labor and
                        white-collar workers to fill a single position or build a global team.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="dream-section" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="dream-text">
                    <h2>Your Dream Jobs Are Waiting</h2>
                    <p>Over 1 million interactions, 50,000 success stories Make yours now.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="work-porcess-area section" data-aos="fade-up" data-aos-duration="3000">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-bordered animation fadeInUp animation-visible" data-animation="fadeInUp"
                    data-animation-delay="0">
                    <h2><span class="line line__left"></span>Candidate Working Process<span
                            class="line line__right"></span></h2>
                </div>
            </div>
        </div>
        <div class="process-info">
            <div class="row">
                <div class="col-md-3 d-flex">
                    <div class="single-process first text-center align-self-stretch">
                        <div class="progress-img-wrap">
                            <img class="img-fluid"
                                src="{{ asset('uploads/icons/icons8-signing-a-document-48.png.webp')}}" class="" alt="">
                        </div>
                        <h4>Register Account</h4>
                        <p>To get our support, you should register and get support. </p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="single-process secend text-center align-self-stretch">
                        <div class="progress-img-wrap">
                            <img class="img-fluid" src="{{ asset('uploads/icons/services.png.webp')}}" class="" alt="">
                        </div>
                        <h4>Update Profile</h4>
                        <p>For client convenience,You should update your profile from my account setting.</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="single-process thard text-center align-self-stretch">
                        <div class="progress-img-wrap">
                            <img class="img-fluid" src="{{ asset('uploads/icons/Tirra_icon.png.webp')}}" class=""
                                alt="">
                        </div>
                        <h4>Select/Buy Candidate Package</h4>
                        <p>Buy your candidate package and search for your dream job. Apply it and get it.</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="single-process last text-center align-self-stretch">
                        <div class="progress-img-wrap">
                            <img class="img-fluid"
                                src="{{ asset('uploads/icons/istockphoto-1224838022-612x612-1.jpg.webp')}}" class=""
                                alt="">
                        </div>
                        <h4>Sit for Interview</h4>
                        <p>If any company selects you, you will get a virtual meeting invitation through email.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="company-working-process">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex justify-content-center align-items-center" data-aos="fade-right">
                <div class="company-working-process-text">
                    <h5>Employers Looking for Expert Candidates</h5>
                    <p>Every Company/Organization/Industry/Person wants to hire skillful reliable candidates for their
                        success, that's why they search for expert and experienced candidates. If you need expert and
                        experienced reliable candidates for your business success, you can find them here....</p>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center" data-aos="fade-left">
                <div class="company-wrok-process-img">
                    <img class="img-fluid" src="{{ asset('uploads/bg/Pi-charrt-for-web-e1670320603510.webp')}}" class=""
                        alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="job-type">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                <div class="jobType-text align-self-stretch">
                    <h5>Looking for expert Candidates?</h5>
                    <p>If yes,You are right place.Just search your desire candidates and hire them for your business or
                        personal project etc.</p>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-left">
                <div class="jobType-text align-self-stretch">
                    <h5>Are you searching your dream job?</h5>
                    <p>If yes,you are right place. Search your dream job and apply it buying your package, confirm it
                        with Virtual interview and Get VISA for free. When you will select for your dream job, you have
                        to pay our website service fee for completing your arrival process and joining your dream job.
                        But in your country you have to complete Medical test and Embassy process up to you.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="new-job-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-bordered animation fadeInUp animation-visible" data-animation="fadeInUp"
                    data-animation-delay="0">
                    <h2><span class="line line__left"></span>Featured Jobs<small>Apply your suitable jobs</small><span
                            class="line line__right"></span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Single Large Job List -->
                <div class="job-new-list" data-aos="zoom-in-up">
                    <div class="vc-thumb">
                        <img class="img-fluid" src="{{ asset('uploads/bg/adwords.png')}}" class="" alt="" title="">
                    </div>
                    <div class="vc-content">
                        <h5 class="title"><a href="job-detail.html">Web Developer</a><span class="j-full-time">Full
                                Time</span></h5>
                        <p>Google Inc</p>
                        <ul class="vc-info-list">
                            <li class="list-inline-item">
                                <h5>Location</h5><i class="ti-credit-card"></i>Riyadh,Saudi Arabia
                            </li>
                            <li class="list-inline-item">
                                <h5>Time</h5>
                                <div class="skills">
                                    <span>3 weeks ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>

                <!-- Single Large Job List -->
                <div class="job-new-list" data-aos="zoom-in-up">
                    <div class="vc-thumb">
                        <img class="img-fluid" src="{{ asset('uploads/bg/asana.png')}}" class="" alt="" title="">
                    </div>
                    <div class="vc-content">
                        <h5 class="title"><a href="job-detail.html">Web Developer</a><span class="j-full-time">Full
                                Time</span></h5>
                        <p>Google Inc</p>
                        <ul class="vc-info-list">
                            <li class="list-inline-item">
                                <h5>Location</h5><i class="ti-credit-card"></i>Riyadh,Saudi Arabia
                            </li>
                            <li class="list-inline-item">
                                <h5>Time</h5>
                                <div class="skills">
                                    <span>3 weeks ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>

                <!-- Single Large Job List -->
                <div class="job-new-list" data-aos="zoom-in-up">
                    <div class="vc-thumb">
                        <img class="img-fluid" src="{{ asset('uploads/bg/drive.png')}}" class="" alt="" title="">
                    </div>
                    <div class="vc-content">
                        <h5 class="title"><a href="job-detail.html">Web Developer</a><span class="j-full-time">Full
                                Time</span></h5>
                        <p>Google Inc</p>
                        <ul class="vc-info-list">
                            <li class="list-inline-item">
                                <h5>Location</h5><i class="ti-credit-card"></i>Riyadh,Saudi Arabia
                            </li>
                            <li class="list-inline-item">
                                <h5>Time</h5>
                                <div class="skills">
                                    <span>3 weeks ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>

                <!-- Single Large Job List -->
                <div class="job-new-list" data-aos="zoom-in-up">
                    <div class="vc-thumb">
                        <img class="img-fluid" src="{{ asset('uploads/bg/google.png')}}" class="" alt="" title="">
                    </div>
                    <div class="vc-content">
                        <h5 class="title"><a href="job-detail.html">Web Developer</a><span class="j-full-time">Full
                                Time</span></h5>
                        <p>Google Inc</p>
                        <ul class="vc-info-list">
                            <li class="list-inline-item">
                                <h5>Location</h5><i class="ti-credit-card"></i>Riyadh,Saudi Arabia
                            </li>
                            <li class="list-inline-item">
                                <h5>Time</h5>
                                <div class="skills">
                                    <span>3 weeks ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>

                <!-- Single Large Job List -->
                <div class="job-new-list">
                    <div class="vc-thumb">
                        <img class="img-fluid" src="{{ asset('uploads/bg/photos.png')}}" class="" alt="" title="">
                    </div>
                    <div class="vc-content">
                        <h5 class="title"><a href="job-detail.html">Web Developer</a><span class="j-full-time">Full
                                Time</span></h5>
                        <p>Google Inc</p>
                        <ul class="vc-info-list">
                            <li class="list-inline-item">
                                <h5>Location</h5><i class="ti-credit-card"></i>Riyadh,Saudi Arabia
                            </li>
                            <li class="list-inline-item">
                                <h5>Time</h5>
                                <div class="skills">
                                    <span>3 weeks ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>

                <!-- Single Large Job List -->
                <div class="job-new-list" data-aos="zoom-in-up">
                    <div class="vc-thumb">
                        <img class="img-fluid" src="{{ asset('uploads/bg/paypal.png')}}" class="" alt="" title="">
                    </div>
                    <div class="vc-content">
                        <h5 class="title"><a href="job-detail.html">Web Developer</a><span class="j-full-time">Full
                                Time</span></h5>
                        <p>Google Inc</p>
                        <ul class="vc-info-list">
                            <li class="list-inline-item">
                                <h5>Location</h5><i class="ti-credit-card"></i>Riyadh,Saudi Arabia
                            </li>
                            <li class="list-inline-item">
                                <h5>Time</h5>
                                <div class="skills">
                                    <span>3 weeks ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="new-job-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-bordered animation fadeInUp animation-visible" data-animation="fadeInUp"
                    data-animation-delay="0">
                    <h2><span class="line line__left"></span>Urgent Jobs<small>Know your worth and find the job that
                            qualify your life.</small><span class="line line__right"></span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Single Large Job List -->
                <div class="job-new-list" data-aos="zoom-in-up">
                    <div class="vc-thumb">
                        <img class="img-fluid" src="{{ asset('uploads/bg/adwords.png')}}" class="" alt="" title="">
                    </div>
                    <div class="vc-content">
                        <h5 class="title"><a href="job-detail.html">Web Developer</a><span class="j-full-time">Full
                                Time</span></h5>
                        <p>Google Inc</p>
                        <ul class="vc-info-list">
                            <li class="list-inline-item">
                                <h5>Location</h5><i class="ti-credit-card"></i>Riyadh,Saudi Arabia
                            </li>
                            <li class="list-inline-item">
                                <h5>Time</h5>
                                <div class="skills">
                                    <span>3 weeks ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>

                <!-- Single Large Job List -->
                <div class="job-new-list" data-aos="zoom-in-up">
                    <div class="vc-thumb">
                        <img class="img-fluid" src="{{ asset('uploads/bg/asana.png')}}" class="" alt="" title="">
                    </div>
                    <div class="vc-content">
                        <h5 class="title"><a href="job-detail.html">Web Developer</a><span class="j-full-time">Full
                                Time</span></h5>
                        <p>Google Inc</p>
                        <ul class="vc-info-list">
                            <li class="list-inline-item">
                                <h5>Location</h5><i class="ti-credit-card"></i>Riyadh,Saudi Arabia
                            </li>
                            <li class="list-inline-item">
                                <h5>Time</h5>
                                <div class="skills">
                                    <span>3 weeks ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>

                <!-- Single Large Job List -->
                <div class="job-new-list" data-aos="zoom-in-up">
                    <div class="vc-thumb">
                        <img class="img-fluid" src="{{ asset('uploads/bg/drive.png')}}" class="" alt="" title="">
                    </div>
                    <div class="vc-content">
                        <h5 class="title"><a href="job-detail.html">Web Developer</a><span class="j-full-time">Full
                                Time</span></h5>
                        <p>Google Inc</p>
                        <ul class="vc-info-list">
                            <li class="list-inline-item">
                                <h5>Location</h5><i class="ti-credit-card"></i>Riyadh,Saudi Arabia
                            </li>
                            <li class="list-inline-item">
                                <h5>Time</h5>
                                <div class="skills">
                                    <span>3 weeks ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>

                <!-- Single Large Job List -->
                <div class="job-new-list" data-aos="zoom-in-up">
                    <div class="vc-thumb">
                        <img class="img-fluid" src="{{ asset('uploads/bg/google.png')}}" class="" alt="" title="">
                    </div>
                    <div class="vc-content">
                        <h5 class="title"><a href="job-detail.html">Web Developer</a><span class="j-full-time">Full
                                Time</span></h5>
                        <p>Google Inc</p>
                        <ul class="vc-info-list">
                            <li class="list-inline-item">
                                <h5>Location</h5><i class="ti-credit-card"></i>Riyadh,Saudi Arabia
                            </li>
                            <li class="list-inline-item">
                                <h5>Time</h5>
                                <div class="skills">
                                    <span>3 weeks ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-bordered" data-animation-delay="0">
                    <h2><span class="line line__left"></span>Testimonials<small>Our Happy Clients Say About
                            Us.</small><span class="line line__right"></span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" data-aos="fade-right">
                <div class="testimonial">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut laoreet mi. Integer vitae
                            elit quis leo tincidunt euismod. Nullam blandit vestibulum lectus sed sollicitudin. </p>
                    </blockquote>
                    <div class="bq-author">
                        <figure class="author-img">
                            <img src="{{ asset('uploads/bg/testi-img1.png')}}" alt="" title="">
                        </figure>
                        <h6>John Doe</h6>
                        <span class="bq-author-info">CEO, Compay Name</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="testimonial">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut laoreet mi. Integer vitae
                            elit quis leo tincidunt euismod. Nullam blandit vestibulum lectus sed sollicitudin. </p>
                    </blockquote>
                    <div class="bq-author">
                        <figure class="author-img">
                            <img src="{{ asset('uploads/bg/testi-img2.png')}}" alt="" title="">
                        </figure>
                        <h6>Samantha White</h6>
                        <span class="bq-author-info">Manager, Compay Name</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="partners-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-bordered animation fadeInUp animation-visible" data-animation="fadeInUp"
                    data-animation-delay="0">
                    <h2><span class="line line__left"></span>Top Hiring Companies<small>We hire skillful passionate
                            candidates throughout the world.</small><span class="line line__right"></span></h2>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-3 col-md-4 col-12 mb-30 d-flex">
                <div class="bakix-features  align-self-stretch">
                    <img src="{{ asset('uploads/slider/Alshaya.webp')}}" alt="" title="">
                    <h4>Alshaya</h4>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mb-30 d-flex">
                <div class="bakix-features align-self-stretch">
                    <img src="{{ asset('uploads/slider/download.webp')}}" alt="" title="">
                    <h4>Landmark</h4>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mb-30 d-flex">
                <div class="bakix-features align-self-stretch">
                    <img src="{{ asset('uploads/slider/Almarai.webp')}}" alt="" title="">
                    <h4>Almarai</h4>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mb-30 d-flex">
                <div class="bakix-features align-self-stretch">
                    <img src="{{ asset('uploads/slider/download-3.webp')}}" alt="" title="">
                    <h4>Maaden</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-bordered">
                    <h2><span class="line line__left"></span>Al Wafid Latest News<small>To get Al-Wafid latest updates,
                            offer and news. you may follow these articles and register on our website .</small><span
                            class="line line__right"></span></h2>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-sm-6 col-lg-4">
                <div class="blog-item">
                    <div class="top">
                        <a href="#">
                            <img src="{{ asset('uploads/bg/how-to-use-al-wafid.webp')}}" alt="" title="">
                        </a>
                    </div>
                    <span>Job skills. 12-09-2020</span>
                    <h3>
                        <a href="#">How to use Al-Wafid website?</a>
                    </h3>
                    <div class="cmn-link">
                        <a href="#">
                            Learn More
                            <i class="fa-solid fa-arrow-right-long two"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="blog-item">
                    <div class="top">
                        <a href="#">
                            <img src="{{ asset('uploads/bg/Services-1.webp')}}" alt="" title="">
                        </a>
                    </div>
                    <span>Career advice. 11-09-2020</span>
                    <h3>
                        <a href="#">Al-Wafid Best Services</a>
                    </h3>
                    <div class="cmn-link">
                        <a href="#">
                            Learn More
                            <i class="fa-solid fa-arrow-right-long two"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="blog-item">
                    <div class="top">
                        <a href="#">
                            <img src="{{ asset('uploads/bg/WhatsApp-Image-2023-05-02-at-12.17.06-AM.webp')}}" alt=""
                                title="">
                        </a>
                    </div>
                    <span>Future plan. 10-09-2020</span>
                    <h3>
                        <a href="#">Al Wafid Mission</a>
                    </h3>
                    <div class="cmn-link">
                        <a href="#">
                            Learn More
                            <i class="fa-solid fa-arrow-right-long two"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Faq-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-bordered animation fadeInUp animation-visible" data-animation="fadeInUp"
                    data-animation-delay="0">
                    <h2><span class="line line__left"></span>FAQ About Al-Wafid<span class="line line__right"></span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-md-6" data-aos="fade-right">
                <div class="accordion">
                    <div class="accordion-item">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">Will I get Saudi Arabia Visa with a job through al-wafid
                                agency?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Al-Wafid tell you yes, you will get Saudi Arabia Visa with a best job, If any company 
                                will select you by taking your virtual interview  according to their requirements.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-2" aria-expanded="false">
                            <span class="accordion-title">Is Al-Wafid job provider and Visa selling company? If not,
                                What is the main purposes of al-wafid?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                No, Al-Wafid  only IT services provider agency approved by
                                <a href="https://en.wikipedia.org/wiki/Saudi_Arabia" target="_blank"
                                    rel="noopener">(KSA)</a>
                                Kingdom of Saudi Arabia Government. Al-Wafid collects actual job vacancies inside from
                                Saudi Arabia  higher class companies through our website and justify about the job offer
                                companies then publish job offer on our
                                <a href="https://al-wafid.com/" target="_blank" rel="noopener">website</a>
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-3" aria-expanded="false">
                            <span class="accordion-title">What are the best services of Al-Wafid ?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>What are the best services of Al-Wafid ?
                                <a href="https://al-wafid.com/all-jobs/" target="_blank" rel="noopener">dream job</a>
                                from their home through our website and Companies can choose different professional
                                skillful candidates from the world on our website.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-4" aria-expanded="false">
                            <span class="accordion-title">Who will be benefited from Al-Wafid website?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p><a href="https://al-wafid.com/candidates/" target="_blank" rel="noopener">Candidates</a>
                                and Companies both will be benefited from <a href="https://al-wafid.com/"
                                    target="_blank" rel="noopener">Al-Wafid</a> website. <a
                                    href="https://al-wafid.com/candidates/" target="_blank"
                                    rel="noopener">Candidates</a> will get proper best job according to their
                                qualifications and experiences with less expenses also companies will find thousands of
                                different discipline professional candidates throughout the world.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordion-title">How Al Wafid provides less expenses job offer?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p><a href="https://al-wafid.com/" target="_blank" rel="noopener">Al Wafid</a> connects
                                candidates directly with higher-class Saudi Arabia best companies and company will
                                provide all necessary processing to bring skillful experiences candidates in workplace.
                                That’s why between <a href="https://al-wafid.com/candidates/" target="_blank"
                                    rel="noopener">candidates</a> and companies there are no Broker to increase
                                processing fee.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="accordion">
                    <div class="accordion-item">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">Is Al Wafid registration free for applying job and posting
                                job?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>No, <a href="https://al-wafid.com/" target="_blank" rel="noopener">Al-Wafid</a> takes a
                                little amount as a <a href="https://al-wafid.com/candidates/" target="_blank"
                                    rel="noopener">candidate</a> best job apply fee package.<br>
                                It is one time package for applying unlimited best jobs in life time until candidate get
                                best job. Job posting is free now but sometimes it will depends on our <a
                                    href="https://al-wafid.com/privacy-policy-2/" target="_blank"
                                    rel="noopener">policy.</a></p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-2" aria-expanded="false">
                            <span class="accordion-title">How will I buy candidate job applying package with
                                al-wafid?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>At first <a href="https://al-wafid.com/signup/" target="_blank"
                                    rel="noopener">register</a> on Al-Wafid website by giving valid information and
                                update your profile<br>
                                from candidate dashboard then buy candidate job apply package with VISA/Master Card or
                                others online supported payment method. <a href="https://al-wafid.com/signup/"
                                    target="_blank" rel="noopener">Apply</a> your dream job until you get it.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-3" aria-expanded="false">
                            <span class="accordion-title">Is Al-Wafid refund candidate package fee?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>No,It is not refundable.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-4" aria-expanded="false">
                            <span class="accordion-title">If any company break their agreement with candidate in future,
                                Al-Wafid will take any action against company or Candidate?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>Al-Wafid&nbsp; connects candidates to the higher class companies as a agency to get
                                candidates dream job. Al Wafid is not responsible for anything in future.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordion-title">Will I get my dream job inside Saudi Arabia through Al Wafid
                                website?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>Yes, You can get your dream job through Al Wafid website because Al Wafid justify about
                                companies and job vacancies then publish it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="our-service-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center" data-aos="fade-up">
                    <h6 class="bg-white px-3">Services</h6>
                    <h5 class="mb-5">Our Services</h5>
                </div>
            </div>
        </div>
        <div class="service-card">
            <div class="row">
                @foreach($services as $key => $service)

                <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item align-self-stretch rounded pt-3">
                        <div class="p-4">
                            @switch($key)
                            @case(0)
                            <i class="fa-solid fa-briefcase"></i>
                            @break
                            @case(1)
                            <i class="fa-brands fa-cc-visa"></i>
                            @break
                            @case(2)
                            <i class="fa-solid fa-building"></i>
                            @break
                            @endswitch
                            <h5>{{ $service->name }}</h5>
                            <p>{{$service->short_desc}}</p>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="work-process">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center" data-aos="fade-up">
                    <h6 class="bg-white px-3">Process</h6>
                    <h5 class="mb-5">3 Easy Steps</h5>
                </div>
            </div>
        </div>
        <div class="process-step mt-5">
            <div class="row">

                @foreach($easy_steps as $key => $step)

                <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-card align-self-stretch border text-center pt-5 pb-4 px-4">
                        <div
                            class="process-icon d-inline-flex align-items-center justify-content-center rounded-circle shadow">
                            @switch($key)
                            @case(0)
                            <i class="fa-solid fa-3x fa-circle-info text-white"></i>
                            @break
                            @case(1)
                            <i class="fa fa-plane fa-3x text-white"></i>
                            @break
                            @case(2)
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                            @break
                            @endswitch
                        </div>
                        <h5 class="mt-4">{{ $step->name }}</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">{{$step->short_desc}}</p>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</section>
<section class="offers-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="section-heading text-center">
                    <h6 class="bg-white px-3">Offer</h6>
                    <h5 class="mb-2">Our Special Offer</h5>
                    <p class="mb-5">We will ensure your appearance ontime in your workplace country by the Grace Of
                        Almighty with less expenses</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row d-flex justify-content-center">
                    @foreach($offers as $offer)
                    <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
                        <div class="card-basic align-self-stretch">
                            <div class="card-header header-basic">
                                <h5>{{ $offer->name }}</h5>
                            </div>
                            <div class="card-body">
                                <p>{{ $offer->short_desc }}</p>
                                <div class="card-element-hidden-basic">
                                    {!! $offer->points !!}
                                    {{-- <button class="btn btn-basic mt-4">Read More</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
                        <div class="card-basic align-self-stretch">
                            <div class="card-header header-basic">
                                <h5>Do you have job&Visa only need embassy processing?</h5>
                            </div>
                            <div class="card-body">
                                <p>You must have to select from "https://al-wafid.com" website by company</p>
                                <div class="card-element-hidden-basic">
                                    <ul class="card-element-container">
                                        <li class="card-element">You will manage job from al-wafid.com by competing</li>
                                        <li class="card-element">You will manage Visa from Company</li>
                                        <li class="card-element">We will process your Visa</li>
                                    </ul>
                                    <button class="btn btn-basic mt-4">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section> -->

<script>
const items = document.querySelectorAll('.accordion button');

function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
}

items.forEach((item) => item.addEventListener('click', toggleAccordion));
</script>
@endsection