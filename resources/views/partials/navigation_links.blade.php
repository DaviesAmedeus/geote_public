
<nav id="navbar" class="navbar">
    <ul>
         <li><a href="{{ route('home') }}">Home</a></li>
       <li><a href="{{ route('about') }}">About</a></li>
       <li><a href="{{ route('engagements') }}">Engagements</a></li>
       <li><a href="{{ route('projects.index') }}">Projects</a></li>
        <li class="dropdown"><a href="#"><span>Blog</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
             <ul>
               <li><a href="{{ route('blog.index') }}">Blog</a></li>
               <li><a href="{{ route('publications') }}">Publications</a></li>
             </ul>
        </li>
         <li class="dropdown"><a href="#"><span>Events</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
             <ul>
               <li><a href="https://geospark.geote.org">Geo_spark</a></li>
               <li class="dropdown"><a href="#"><span>GIS Programs</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  {{-- <li><a href="{{ route('blog.index') }}">Blog</a></li>
                  <li><a href="{{ route('updates.index') }}">Publications</a></li> --}}
                </ul>
           </li>
             </ul>
        </li>
     </ul>
 </nav>
 