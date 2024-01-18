<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        @include('components.nav')
    </nav>
    <!-- //NAVBAR -->

    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper">

        <!-- HOME -->
        <section id="home" class="full-height px-lg-5">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="display-4 fw-bold" data-aos="fade-up">I'M A <span class="text-brand">Full stack Web Developer</span> FROM Enugu, NG</h1>
                        <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">I am Chiemezie Dennis, And I craft
                            high-performing and delightful experiences tailored and conversion-focused Websites for my clients.</p>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <a href="#work" class="btn btn-brand me-3">Explore My Work</a>
                            @php
                                $input = $contact->phone;
                                $output = substr($input, -10, -7) . " " . substr($input, -7, -4) . " " . substr($input, -4);
                            @endphp
                            <a href="tel:+{{$contact->phone}}" class="link-custom">Call: (+234) {{$output}}</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- //HOME -->

        <!-- SERVICES -->
        <section id="services" class="full-height px-lg-5">
            @include('components.services')
        </section>
        <!-- SERVICES -->

        <!-- ABOUT -->
        <section id="about" class="full-height px-lg-5">
            @include('components.about')
        </section>
        <!-- //ABOUT -->

        <!-- WORK -->
        <section id="work" class="full-height px-lg-5">
            @include('components.works')
        </section>
        <!-- //WORK -->
        <!-- CONTACT -->
        <section id="contact" class="full-height px-lg-5">
            @include('components.contact')
        </section>
        <!-- //CONTACT -->

        <!-- FOOTER -->
        <footer class="py-5 px-lg-5">
            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">Designed by <a href="#" class="fw-bold">SA7MAN</a>, Developed by <a href="/" class="fw-bold">Dennis</a></p>
                    </div>
                    <div class="col-auto">
                        <div class="social-icons">
                            <a href="#"><i class="lab la-twitter"></i></a>
                            <a href="#"><i class="lab la-instagram"></i></a>
                            <a href="#"><i class="lab la-dribbble"></i></a>
                            <a href="#"><i class="lab la-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //FOOTER -->

    </div>
    <!-- //CONTENT WRAPPER -->
@include('components.scripts')
</body>

</html>