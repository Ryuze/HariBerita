@extends('layouts/main')

@section('title', 'search')

@section('container')


<div class="container-artikel container-fluid">

    <div class="article card-deck card-header" style="margin:2em 0">
        <h5>
            Artikel yang anda cari dengan judul "<?php echo $_GET["query"]; ?>"
        </h5>
    </div>

    <div class="article card-deck card-header">

        <!-- pencarian -->
        @foreach($contents as $item)

        <a href="{{ Route('homepage.show', $item->id) }}" class="article-search img-thumbnail" style="max-height:fit-content ">
        <div class="container">
            <button class="btn article-tag">{{$item->tag_name}}</button>
            </div>
            <img src="{{asset('img/banner.png')}}" alt="article1" class="article-img-search">
            <div class="article-paragraph-search">

        <div class="article card-deck card-header">
        <div>
            <h3 class="article-title">{{$item->title}}</h3>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <p class="text-muted"><small>Dibuat tanggal {{ $item ->post_time }}</small></p>
                </div>
            </div>
            <p class="article-detail">
                {{ substr ($item->content, 0, random_int(30,150)) }}
            </p>
        </div>
        </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection