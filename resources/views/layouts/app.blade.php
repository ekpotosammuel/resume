<!DOCTYPE html>
<html lang="en">
    <head>
        <met#aeb3b8et="utf-8">
        <title>Samuel Bernard Ekpoto</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <center>
            <div class="card-body">
                <a class="navbar-brand" href="/">Home</a>
                <a class="navbar-brand" href="{{ route('project') }}">Project</a>
                <a class="navbar-brand" href="{{ route('profile') }}">Profile</a>
                <a class="navbar-brand" href="{{ route('contact') }}">Contact</a>
            </div>
        </center>

        {{--  <section class="d-flex justify-content-center mb-4">
            <div class="bg-secondary text-light text-center p-2">
                <div class="d-flex justify-content-center mb-8">
                    <h1><a href="/" class="tab-control-item active p-3">HOME</a></h1> 
                    <h1><a href="{{ route('project') }}" class="tab-control-item p-3">PROJECT</a></h1>
                    <h1><a href="{{ route('profile') }}" class="tab-control-item p-3">PROFILE</a></h1>
                    <h1><a href="" class="tab-control-item p-3">CONTACT</a></h1>
                </div>
        </section>  --}}
        @yield('content')
        
        <!-- Footer Start -->
        <section class="wow fadeIn" data-wow-delay="0.1s">
            <div class="bg-secondary text-light text-center p-5">
                <div class="d-flex justify-content-center mb-4">
                    <a class="btn btn-dark btn-square mx-1" href="https://twitter.com/ekpotosammuel"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-square mx-1" href="https://web.facebook.com/ekpotosammuel"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-square mx-1" href="https://www.linkedin.com/in/ekpoto-sammuel-3230861aa/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-dark btn-square mx-1" href="https://www.instagram.com/ekpotosammuel"><i class="fab fa-instagram"></i></a>
                </div>
                {{--  <div class="d-flex justify-content-center mb-3">
                    <a class="text-light px-3 border-end" href="#">Privacy</a>
                    <a class="text-light px-3 border-end" href="#">Terms</a>
                    <a class="text-light px-3 border-end" href="#">FAQs</a>
                    <a class="text-light px-3" href="#">Help</a>
                </div>  --}}
                
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <p class="m-0">&copy; All Rights Reserved. Designed by <a href="https://htmlcodex.com">CodeDreamer</a></p>
            </div>
        </section>
        <!-- Footer End -->
    </body>
</html>