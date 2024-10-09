<div class="col-xl-4 col-md-6">
    <div class="post-item position-relative h-100">

        <div class="post-img position-relative overflow-hidden">
            <img src="{{$blog->image ? $blog->image() : asset('assets/img/blog/blog1.jpg') }}" class="img-fluid" alt="">
            <span class="post-date">{{ date('jS M Y', strtotime($blog->created_at)) }}</span>
        </div>

        <div class="post-content d-flex flex-column">

            <h3 class="post-title">{{ $blog->title }}</h3>

            <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Written by {{ $blog->author->name}}</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Blog</span>
                </div>
            </div>

            <p>{{ Str::words(strip_tags($blog->body), 30)}}</p>

            <hr>

            <a href="{{ route('blog.show', $blog) }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

        </div>

    </div>

</div>
