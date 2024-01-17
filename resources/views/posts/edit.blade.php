<x-layouts.main>
    <x-slot:title>
        Postdi O'zgartirish - {{ $post->id }}
    </x-slot:title>

    <div class="inner-page-banner">
        <div class="container">
        </div>
        </div>
        <div class="inner-information-text">
        <div class="container">
        <h3>Postdi O'zgartirish</h3>
        <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Postdi O'zgartirish - {{ $post->id }}</li>
        </ul>
        </div>
        </div>
        </section>
        <section id="contant" class="contant main-heading team">
        <div class="row">
        <div class="container container">
        <div class=" contact">
        <div class=" col-md-12">
        <div class="map"> 
        </div>
        </div>
        <div class="col-md-6">
        <div class="contact-info">
        <h3>Yangi Post Yaratamiz</h3>
        </div>
        <div class="kode-forminfo">
        </ul>
        </div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="contact-us">
        <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST">
            @method('PUT')
            @csrf
        <ul>
        <li><input type="text" name="title" value="{{ $post->title }}" class="required" placeholder="Sarlavha"></li>
        <li><textarea name="short_content" class="required email"  placeholder="Short_Content"> {{ $post->short_content }}</textarea></li>
        <li><textarea name="content" placeholder="Content">{{ $post->content }}</textarea></li>
        <li><input class="thbg-color" type="submit" value="Saqlash"></li>
        </ul>
        <div class="hidden-me" id="contact_form_responce">
        <p></p>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>

</x-layouts.main>