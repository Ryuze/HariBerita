@extends('layouts/main')

@section('title', 'CIGNews')

@section('container')
<!-- body -->
<div class="jumbotron container-fluid" id="jumbotron">
    <div class="container">
        <img src="{{asset('img/banner.png')}}" alt="banner" class="banner">
        <div class="text-banner">
            <h2>CIGNews</h2>
            <p>Memberikan Berita yang update dan faktual</p>

        </div>
    </div>
</div>

<!-- content -->

<div class="container-artikel container-fluid">

    <div class="article card-deck card-header">

        <!-- konten -->

        @foreach($contents as $item)

        <a href="{{ Route('homepage.show', $item->id) }}" class="article-list img-thumbnail">
            <!-- gambarjudul -->
            <img src="{{ file_exists(public_path('storage/images/' . $item->image)) ? asset('storage/images/' . $item->image) : asset('img/banner.png') }}" alt="article1" class="article-img">
            <button class="btn article-tag">{{$item->tag_name}}</button>
            <div class="article-caption ">
                <h5 class="article-title">{{$item->title}}</h5>
                <p class="article-paragraph">
                    {{$item->content}}
                </p>

            </div>
        </a>

        @endforeach
        
    </div>
    {{ $contents->links() }}

</div>
@endsection