@extends('layouts/main')

@section('title', 'CIGNews')

@section('container')
<!-- body -->
<div class=" container-fluid" style="padding-top: 2em;">

    <div class="jumbotron jumbotron-fluid" id="jumbotron">
        <div class="container">
            <img src="{{asset('img/banner.png')}}" alt="banner" class="banner">
            <div class="text-banner">
                <h2>CIGNews</h2>
                <p>Memberikan Berita yang update dan faktual</p>

            </div>
        </div>
    </div>
</div>

<!-- content -->

<div class="container-artikel container-fluid">

    <div class="article card-deck card-header">

        <!-- artikel -->
        <a href="{{ url('/article')}}" class="article-list img-thumbnail">
            <!-- gambarjudul -->
            <img src="{{asset('img/banner.png')}}" alt="article1" class="article-img">
            <button class="btn article-tag">tag artikel</button>
            <div class="article-caption ">
                <h5 class="article-title">judul 1</h5>
                <p class="article-paragraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, excepturi accusantium. Omnis
                    odio alias dicta explicabo, earum enim quos deleniti est, dolorum corporis laborum sint minima
                    molestias accusamus dolore voluptas.
                </p>

            </div>
        </a>




    </div>

</div>
@endsection