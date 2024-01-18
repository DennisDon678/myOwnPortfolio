<div class="container">

    <div class="row pb-4" data-aos="fade-up">
        <div class="col-lg-8">
            <h6 class="text-brand">WORK</h6>
            <h1>My Recent Projects</h1>
        </div>
    </div>

    <div class="row gy-4">

        @foreach($projects as $project)
            <div class="col-md-6" data-aos="fade-up">
            <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                    <img class="rounded-4" src="{{asset('projects')}}/{{$project->image}}" alt="">
                </div>
                <div class="card-custom-content p-4">
                    <h4>{{$project->title}}</h4>
                    <p>{{$project->description}}</p>
                    <a href="{{$project->link}}" class="link-custom">Demo Link</a>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>

</div>