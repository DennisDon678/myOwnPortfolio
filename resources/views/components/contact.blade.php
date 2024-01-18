<div class="container">

    <div class="row justify-content-center text-center">
        <div class="col-lg-8 pb-4" data-aos="fade-up">
            <h6 class="text-brand">CONTACT</h6>
            <h1>Interested in working together? Let's talk</h1>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
            <form action="/contact" class="row g-lg-3 gy-3" method="POST">
                @csrf
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Enter subject">
                </div>
                <div class="form-group col-12">
                    <textarea rows="4" class="form-control" name="message" placeholder="Enter your message"></textarea>
                </div>
                <div class="form-group col-12 d-grid">
                    <button type="submit" class="btn btn-brand">Contact me</button>
                </div>
            </form>
        </div>
    </div>


</div>