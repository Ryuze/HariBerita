@extends('layouts/main')

@section('title', 'NEWSCIG')

@section('container')
<!-- body -->
<div class=" container-fluid" style="padding-top: 2em">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.
            </p>
        </div>
    </div>
</div>

<!-- content -->

<div class="container-artikel container-fluid">

    <div class="article card-deck card-header">

        <!-- artikel -->
        <a href="content.html" class="article-list img-thumbnail">
            <img src="https://i.pximg.net/img-master/img/2020/04/02/14/54/51/80513923_p3_master1200.jpg" alt="article1"
                class="article-img">
            <button class="btn article-tag">tag artikel</button>
            <div class="article-caption ">
                <h5 class="article-title">judul 1</h5>
                <p class="article-paragraph">lorem ipsun 1
            </div>
        </a>




    </div>

</div>
@endsection