@extends('layouts.website')

@section('content')

<div class="site-section bg-light hero-area">
    <div class="container-fluid">
        <div class="row align-items-stretch retro-layout-2">
            <div class="col-lg-12">
                <div class="hero-bg">
                    <img class="img-fluid" src="{{ asset('uploads/bg/hero-bg.jpg')}}" class="" alt="">
                    <div class="hero-text-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hero-text " data-aos="fade-left">
                                        <div class="txt1">
                                            <h6>{{ $header_footer_seetings->banner_top_text }}</h6>
                                        </div>
                                        <div class="txt2">
                                            <h1>{{ $header_footer_seetings->banner_middle_text }}</h1>
                                        </div>
                                        <div class="txt3">
                                            <p>{{ $header_footer_seetings->banner_bottom_text }}</p>
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
</div>
<section class="about-us-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-us-img-wrap position-relative h-100" data-aos="fade-up">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('uploads/bg/about_bg_2.jpg')}}"
                        class="" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-us-text" data-aos="fade-left">
                    <h6 class="section-title text-start mb-4">About Us</h6>
                    <h5 class="mb-2">What We do<span>?</span></h5>
                    <p class="mb-3">{{ $about_us_seetings->we_do_content }}</p>
                    <h5 class="mb-2">For <span>Candidates</span></h5>
                    <p class="mb-3">{{ $about_us_seetings->candidates_content }}</p>
                    <h5 class="mb-2">For <span>Employers</span></h5>
                    <p class="mb-3">{{ $about_us_seetings->employers_content }}</p>
                    {{-- <div class="read-more-btn">
                        <a class="btn" href="#">Read More</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-service-area">
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
                            <div class="process-icon d-inline-flex align-items-center justify-content-center rounded-circle shadow">
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
</section>
@endsection