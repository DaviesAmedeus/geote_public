<div class="post-author">
    <div class=" d-flex align-items-center">
        <img src="{{$publication->image() ? $publication->image() : asset('assets/img/blog/geote.png') }}" width="100px" height="100px" class="rounded-rectangle rounded-3 flex-shrink-0" alt="">
        <div>
            <h4>{{$publication->title}}</h4>
            <p>
                Using a random letter generator can be a great way to set a randomized password that’s difficult for hackers to crack. Just make sure to set an appropriate minimum length (most websites require passwords to be at least six to twelve characters long). Also remember to include uppercase characters and special symbols when necessary.
                <a href="{{$publication->url}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </p>
        </div>
    </div>
</div><!-- End post author -->
