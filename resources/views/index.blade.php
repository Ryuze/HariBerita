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

        @foreach($contents as $contents)


        <a href="{{ url('/article')}}" class="article-list img-thumbnail">
            <!-- gambarjudul -->
            <img src="{{asset($contents -> image)}}" alt="article1" class="article-img">
            <button class="btn article-tag">tag artikel</button>
            <div class="article-caption ">
                <h5 class="article-title">{{$contents -> title}}</h5>
                <p class="article-paragraph">
                    {{$contents -> content}}
                </p>

            </div>
        </a>
        @endforeach




    </div>

</div>
@endsection