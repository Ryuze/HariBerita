@extends('layouts/main')

@section('title', 'artikel')

@section('container')
<!-- body -->
<div class=" container" style="padding-top: 2em;margin-bottom: 2em;">

    <div class=" jumbotron">
        <!-- gambar -->
        <img src="{{asset('img/banner.png')}}" alt="article1" class="article-img content-img">

    </div>
</div>

<!-- content -->

<div class="container-artikel container-fluid">
    <button class="btn article-tag" style="margin-bottom: 1em;">tag name</button>
    <div class="article card-deck card-header">
        <h5 class="article-title">title</h5>
        <br>
        <div class="container-fluid">
            <p class="article-detail"> content</p>
        </div>

    </div>

</div>
@endsection