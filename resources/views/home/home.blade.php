
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row g-5">
        <div class="col-lg-4 sticky-lg-top vh-100">
            <div class="d-flex flex-column h-100 text-center overflow-auto shadow">
                <img class="w-100 img-fluid mb-4" height="150" src="img/profile.jpg" alt="Image" >
                <h1 class="text-primary mt-2">{{$profile->firstName}} {{$profile->lastName}}</h1> <br>
                <h4>Full Stack Developer</h4>
                <div class="d-flex justify-content-center mt-auto mb-3">
                    <a class="btn btn-secondary btn-square mx-1" href="https://twitter.com/ekpotosammuel"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-secondary btn-square mx-1" href="https://web.facebook.com/ekpotosammuel"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-secondary btn-square mx-1" href="https://www.linkedin.com/in/ekpoto-sammuel-3230861aa/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-secondary btn-square mx-1" href="https://www.instagram.com/ekpotosammuel"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="d-flex align-items-end justify-content-between border-top">
                    <a href="" class="btn w-50 border-end">Download CV</a>
                    <a href="#contact" class="btn w-50 btn-scroll">Contact Me</a>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <!-- About Start -->
            <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="title pb-3 mb-5">About Me</h1>
                <p>
                    Full Stack Developer with 2+ years of experience in python Django and 1 year in PHP larvae as the server-side language. 
                    Experience in GitHub, PostgreSQL, MySQL, HTML, CSS, Bootstrap and ability to work in an Agile and Scrum environment. 
                    Flexible and team player focused on boosting productivity and performance with conscientious and detail-oriented approaches.
                </p>
                <br>
                <div class="row mb-4">
                    <div class="col-sm-6 py-1">
                        <span class="fw-medium text-primary">Name:</span> {{$profile->firstName}}
                    </div>
                    <div class="col-sm-6 py-1">
                        <span class="fw-medium text-primary">Birthday:</span> {{$profile->dob}}
                    </div>
                    <div class="col-sm-6 py-1">
                        <span class="fw-medium text-primary">Degree:</span> {{$profile->degree}}
                    </div>
                    <div class="col-sm-6 py-1">
                        <span class="fw-medium text-primary">Other Certificate:</span> {{$profile->otherCert}}
                    </div>
                    <div class="col-sm-6 py-1">
                        <span class="fw-medium text-primary">Experience:</span> {{$profile->experience}}
                    </div>
                    <div class="col-sm-6 py-1">
                        <span class="fw-medium text-primary">Phone:</span> +012 345 6789
                    </div>
                    <div class="col-sm-6 py-1">
                        <span class="fw-medium text-primary">Email:</span> info@example.com
                    </div>
                    <div class="col-sm-6 py-1">
                        <span class="fw-medium text-primary">Address:</span> 123 Street, New York, USA
                    </div>
                </div>
            </section>
            <!-- About End -->

            <!-- Skills Start -->
            <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="title pb-3 mb-5">Skills</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">HTML</p>
                                <p class="mb-2">95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">CSS</p>
                                <p class="mb-2">85%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">PHP</p>
                                <p class="mb-2">90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Javascript</p>
                                <p class="mb-2">60%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Python</p>
                                <p class="mb-2">95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 95%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Boostrap</p>
                                <p class="mb-2">85%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 85%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Skills End -->

            <!-- Services Start -->
            <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="title pb-3 mb-5">Services</h1>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="service-item">
                            <i class="fa fa-2x fa-laptop-code mx-auto mb-4"></i>
                            <h5 class="mb-2">Web Design</h5>
                            <p class="mb-0">creation of dynamic web applications</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <i class="fab fa-2x fa-android mx-auto mb-4"></i>
                            <h5 class="mb-2">Apps Development</h5>
                            <p class="mb-0">develop endpoint in mobile app based on design specification</p>
                        </div>
                    </div>
                    {{--  <div class="col-md-6">
                        <div class="service-item">
                            <i class="fa fa-2x fa-search mx-auto mb-4"></i>
                            <h5 class="mb-2">SEO</h5>
                            <p class="mb-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <i class="fa fa-2x fa-edit mx-auto mb-4"></i>
                            <h5 class="mb-2">Content Creating</h5>
                            <p class="mb-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore</p>
                        </div>
                    </div>  --}}
                </div>
            </section>
            <!-- Services End -->

            <!-- Portfolio Start -->
            <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="title pb-3 mb-5">Portfolio</h1>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 text-center mb-2">
                                <ul class="list-inline mb-4" id="portfolio-flters">
                                    <li class="btn btn-secondary active"  data-filter="*"><i class="fa fa-star me-2"></i>All</li>
                                    <li class="btn btn-secondary" data-filter=".first"><i class="fa fa-laptop-code me-2"></i>Design</li>
                                    <li class="btn btn-secondary" data-filter=".second"><i class="fa fa-mobile-alt me-2"></i>Development</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row portfolio-container">
                            <div class="col-md-6 mb-4 portfolio-item first">
                                <div class="position-relative overflow-hidden mb-2">
                                    <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                                    <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                        <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                            <i class="bi bi-plus text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 portfolio-item second">
                                <div class="position-relative overflow-hidden mb-2">
                                    <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                                    <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                        <a href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                            <i class="bi bi-plus text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 portfolio-item first">
                                <div class="position-relative overflow-hidden mb-2">
                                    <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                                    <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                        <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                            <i class="bi bi-plus text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 portfolio-item second">
                                <div class="position-relative overflow-hidden mb-2">
                                    <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                                    <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                        <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                            <i class="bi bi-plus text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Portfolio End -->


        </div>
    </div>
</div>



@endsection
