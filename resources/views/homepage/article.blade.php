@extends('layouts/main')

@section('title', 'Artikel')

@section('container')
<!-- body -->
<div class=" container-fluid" style="padding-top: 2em;margin-bottom: 2em;">

    <div class=" jumbotron-fluid">
            <!-- gambar -->
            <img src="/" alt="article1" class="article-img content-img">
        
    </div>
</div>

<!-- content -->

<div class="container-artikel container-fluid">
    <button class="btn article-tag" style="margin-bottom: 1em;">tag berita</button>
    <div class="article card-deck card-header">
        <h5 class="article-title">judul</h5>
        <br>
        <div class="container-fluid">
            <p class="article-pargraph">content</p>
        </div>

    </div>

</div>
@endsection