<x-layouts.main>
    <x-slot:title>
        O'qish joyi
    </x-slot:title>

<div class="inner-page-banner">
<div class="container">
</div>
</div>
<div class="inner-information-text">
<div class="container">
<h3>O'qish joyi</h3>
<ul class="breadcrumb">
<li><a href="index.html">yaratilgan vaqti- {{ $post->created_at }}</a></li>
<li class="active">Post - {{ $post->id }}</li>
</ul>
</div>
</div>
</section>
<section id="contant" class="contant">
<div class="container">
<div class="row">
<div class="col-lg-9 col-sm-12 col-xs-12">
<div class="news-post-holder">
<div class="col-lg-6 col-sm-6 col-xs-12">
<div class="news-post-widget">
<img class="img-responsive" src="/images/img-01_002.jpg" alt="">
<div class="news-post-detail">
<span class="date">20 march 2016</span>
<h2><a href="blog-detail.html">{{ $post->title }}</a></h2>
<p>{{ $post->content }}</p>
</div>
</div>
</div>
<div class="col-md-3">
    <div class="blog-sidebar">
       <div class="search-bar-blog">
          <form>
             <button><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
       </div>
    </div>
    <div class="blog-sidebar">
       <h4 class="heading">Top Categories</h4>
       <div class="category-menu">
          <ul>
             <li><a href="#">Cricket</a></li>
             <li><a href="#">Football</a></li>
             <li><a href="#">Hockey</a></li>
             <li><a href="#">Tennis</a></li>
             <li><a href="#">Basketball</a></li>
             <li><a href="#">Golf</a></li>
             <li><a href="#">Cycling</a></li>
             <li><a href="#">Motorsports</a></li>
          </ul>
       </div>
    </div>
</div>
</aside>
</div>
</div>
</div>
</section>

</x-layouts.main>