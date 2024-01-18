<div class="container">

    <div class="row justify-content-center text-center">
        <div class="col-lg-8 pb-4" data-aos="fade-up">
            <h1>Add a New Project
            </h1>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
            <form action="/add_project" method="POST" class="row g-lg-3 gy-3" enctype="multipart/form-data">
            @csrf
                <div class="form-group col-12">
                    <input type="text" class="form-control" name="title" placeholder="Project Title" required>
                </div>
                <div class="form-group col-12">
                    <input type="url" class="form-control" name="link" placeholder="Demo Link here" required>
                </div>
                <div class="form-group col-12">
                    <textarea rows="4" class="form-control" name="description" placeholder="Project Description" required></textarea>
                </div>
                <div class="form-group col-12">
                    <input type="file" class="form-control" name="image" placeholder="Display Image" required>
                </div>
                <div class="form-group col-12 d-grid">
                    <button type="submit" class="btn btn-brand">Add Project</button>
                </div>
            </form>
        </div>
    </div>


</div>