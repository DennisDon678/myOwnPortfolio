<!DOCTYPE html>
<html lang="en">

@include('admin.dash_components.head')

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        @include('admin.dash_components.nav')
    </nav>
    <!-- //NAVBAR -->

    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper">

        <section id="new_project" class="full-height px-lg-5">
            @include('admin.dash_components.add_project')
        </section>

        <!-- WORK -->
        <section id="all_project" class="full-height px-lg-5">
            @include('admin.dash_components.works')
        </section>
        <!-- //WORK -->

        <section id="about" class="full-height px-lg-5">
            @include('admin.dash_components.add_about')
        </section>

        <!-- ABOUT -->
        <section id="" class="full-height px-lg-5">
            @include('admin.dash_components.about')
        </section>
        <!-- //ABOUT -->

        <!-- CONTACT -->
        <section id="contact" class="full-height px-lg-5">
            @include('admin.dash_components.contact')
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
    @include('admin.dash_components.scripts')
</body>

</html>