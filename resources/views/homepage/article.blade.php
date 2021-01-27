@extends('layouts/main')

@section('title', 'artikel')

@section('container')
<!-- body -->
<div class=" container" style="padding-top: 2em;margin-bottom: 2em;">

    <div class=" jumbotron-fluid">
        <!-- gambar -->
        <img src="{{ file_exists(public_path('storage/images/' . $contents[0]->image)) ? asset('storage/images/' . $contents[0]->image) : asset('img/banner.png') }}" alt="article1" class="article-img content-img">

    </div>
</div>

<!-- content -->

<div class="container-artikel container-fluid"style="margin-bottom:2em">
    @foreach ($contents as $tag)
        <button class="btn article-tag" style="margin-bottom: 1em;">{{ $tag->tag_name }}</button>
    @endforeach
    
    <div class="article card-deck card-header">
        <div>
            <h3 class="article-title">{{ $contents[0]->title }}</h3>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <p class="text-muted"><small>Dibuat oleh {{ $contents[0]->name }}</small></p>
                </div>
                <div class="col-sm-6">
                    <p class="text-muted text-right"><small>Dibuat tanggal {{ $contents[0]->post_time }}</small></p>
                </div>
            </div>
            <p class="article-detail">
                {!! $contents[0]->content !!}
            </p>
        </div>

    </div>

</div>
@endsection