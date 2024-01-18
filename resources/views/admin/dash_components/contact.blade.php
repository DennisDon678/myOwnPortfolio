<div class="container">

    <div class="row justify-content-center text-center">
        <div class="col-lg-8 pb-4" data-aos="fade-up">
            <h6 class="text-brand">CONTACT</h6>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
            <form action="/add_contact" class="row g-lg-3 gy-3" method="POST">
                @csrf

                @if(!empty($contact))
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" name='email' value="{{$contact->email}}">
                    </div>

                    <div class="form-group col-md-6">
                        <input type="tel" class="form-control" name="phone" value="{{$contact->phone}}">
                    </div>
                @else
                    <div class="form-group col-md-6">
                    <input type="email" class="form-control" name='email' placeholder="Enter your email">
                    </div>

                    <div class="form-group col-md-6">
                        <input type="tel" class="form-control" name="phone" placeholder="Enter your Phone number">
                    </div>
                @endif
                
                
                <div class="form-group col-12 d-grid">
                    <button type="submit" class="btn btn-brand">Save</button>
                </div>
            </form>
        </div>
    </div>


</div>