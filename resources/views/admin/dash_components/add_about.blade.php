<div class="container">

    <div class="row justify-content-center text-center">
        <div class="col-lg-8 pb-4" data-aos="fade-up">
            <h1>Add Education Or Experience
            </h1>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
            <form action="/add_about" method="POST" class="row g-lg-3 gy-3" >
                @csrf
                <div class="form-group col-12">
                    <select name="type" id="" class="form-control">
                    <option value="">Select Type</option>
                    <option value="education">Education</option>
                    <option value="experience">Experience</option>
                    </select>
                </div>
                <div class="form-group col-12">
                    <input type="text" class="form-control" name="title" placeholder="Enter title here" required>
                </div>
                <div class="form-group col-12">
                    <textarea rows="4" class="form-control" name="description" placeholder="Project Description" required></textarea>
                </div>
                <div class="form-group col-12 d-grid">
                    <button type="submit" class="btn btn-brand">Add About</button>
                </div>
            </form>
        </div>
    </div>


</div>