<div class="container">

    <div class="row pb-4" data-aos="fade-up">
        <div class="col-lg-8">
            <h6 class="text-brand">ABOUT</h6>
            <h1>My Education & Experiance</h1>
        </div>
    </div>

    <div class="row gy-5">
        <div class="col-lg-6">

            <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Education</h3>
            <div class="row gy-4">

                @if(count($educations)>0)
                    @foreach($educations as $education)
                    <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                        <div class="bg-base p-4 rounded-4 shadow-effect">
                            <h4>{{$education->title}}</h4>
                            <p class="mb-0">{{$education->description}}</p>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                        <div class="bg-base p-4 rounded-4 shadow-effect">
                            
                            <p class="mb-0">No Education Data</p>
                        </div>
                    </div>
                @endif
                

            </div>

        </div>

        <div class="col-lg-6">

            <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Experiance</h3>
            <div class="row gy-4">

                @if(count($experiences)>0)
                @foreach($experiences as $experience)
                <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="bg-base p-4 rounded-4 shadow-effect">
                        <h4>{{$experience->title}}</h4>
                        <p class="mb-0">{{$experience->description}}</p>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="bg-base p-4 rounded-4 shadow-effect">

                        <p class="mb-0">No Experience Data</p>
                    </div>
                </div>
                @endif

            </div>

        </div>

    </div>

</div>