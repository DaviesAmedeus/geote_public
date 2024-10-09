<div class="col-xl-4 col-md-6">
    <div class="post-item position-relative h-100">

        <div class="post-img position-relative overflow-hidden">
            <img src="{{$project->image ? $project->image() : asset('assets/img/blog/blog1.jpg') }}" class="img-fluid img-thumbnail" alt="">

            <span class="post-date">{{ $project->status }}</span>
        </div>

        <div class="post-content d-flex flex-column">

            <h3 class="post-title">{{ $project->title }}</h3>

            <div class="meta d-flex align-items-center">
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Projects</span>
                </div>
            </div>

            <p>{{ $project->description}}</p>

            <hr>

            <a href="{{ route('projects.show', $project) }}" class="readmore stretched-link"><span>Project in detail</span><i class="bi bi-arrow-right"></i></a>

        </div>

    </div>
</div>
