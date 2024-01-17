<x-layouts.main>
    <x-slot:title>
        Postlar 
    </x-slot:title>

    <div class="inner-page-banner">
        <div class="container">
        </div>
     </div>
     <div class="inner-information-text">
        <div class="container">
           <h3>Blog</h3>
           <ul class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li class="active">Blog</li>
           </ul>
        </div>
     </div>
  </section>
  <section id="contant" class="contant main-heading team">

     <div class="row">
      @foreach ($posts as $post)
        <div class="container">
           <div class="col-md-9">
              <div class="feature-post small-blog">
                 <div class="col-md-5">
                    <div class="feature-img">
                       <img src="images/post2.png" class="img-responsive" alt="#" />
                    </div>
                 </div>
                 <div class="col-md-7">
                    <div class="feature-cont">
                       <div class="post-info">
                          <img src="images/profile-img.png" alt="#" />
                          <span>
                             <h4>Oxirgi Postlar</h4>
                             <h5>on Jun 27, 2014</h5>
                          </span>
                       </div>
                       <div class="post-heading">
                          <h3>{{ $post->title }}</h3>
                          <p>{{ $post->short_content }}</p>
                          <div class="full">
                             <a class="btn" href="{{ route('posts.show', ['post' => $post->id]) }}">O'qish</a>
                           <div class="text-right">
                             <a class="btn btn-sm btn-outline-light" href="{{ route('posts.edit' , ['post' => $post->id]) }}">Edit</a>
                             <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-sm btn-outline-light" href=>Destroy</button>
                             </form>
                           </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     @endforeach

     {{ $posts->links() }}

  </section>

</x-layouts.main>