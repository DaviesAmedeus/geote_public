<x-layout>

  <!-- Landing section -->
  <x-slot:landing_section>
    <x-landing-pages.landing-page
      style="background-image: url('{{ asset('assets/img/landingpages_pics/blogpage.jpg') }}');">
      Our Blog Posts
    </x-landing-pages.landing-page>
  </x-slot:landing_section>


  <section id="blog" class="blog">

    <x-flash-message />

    <div class="container" data-aos="fade-up" data-aos-delay="100">


{{--        @auth()--}}
{{--              <a href="" class="btn btn-sm btn-primary m-3 text-right">Create Post</a>--}}
{{--          @endauth--}}

      <div class="row gy-4 posts-list">

        @foreach ($blogs as $blog )
        <x-blog.blog-item :blog="$blog" />
        @endforeach


        <div class="mt-3 p-3">
          {{ $blogs->links()  }}
        </div>

      </div><!-- End blog posts list -->


    </div>
</section><!-- End Blog Section -->
</x-layout>




