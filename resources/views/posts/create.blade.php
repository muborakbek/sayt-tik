<x-layouts.main>
    <x-slot:title>
        Create
    </x-slot:title>

<div class="inner-page-banner">
<div class="container">
</div>
</div>
<div class="inner-information-text">
<div class="container">
<h3>Create</h3>
<ul class="breadcrumb">
<li><a href="index.html">Home</a></li>
<li class="active">Create</li>
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
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
<ul>
<li><input type="text" value="{{ old('title') }}" name="title" class="required" placeholder="Sarlavha"></li>
@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<li><input name="short_content" class="required email" placeholder="Short_Content">{{ old('short_content') }}</li>
@error('short_content')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<li><textarea name="content" placeholder="Content"></textarea>{{ old('content') }}</li>
@error('content')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
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