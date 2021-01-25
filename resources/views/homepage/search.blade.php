@extends('layouts/main')

@section('title', 'Cari')

@section('container')


<div class="container-artikel container-fluid">

    <div class="article card-deck card-header" style="margin:2em 0">
        <h5>
            Artikel yang anda cari dengan judul : ''
        </h5>
    </div>

    <div class="article card-deck card-header">

        <!-- pencarian -->



        <a href="" class="article-search img-thumbnail" style="max-height:fit-content ">
            <div class="container">
                <button class="btn article-tag" style="padding:0 3em;">tag name</button>
            </div>
            <img src="{{asset('img/banner.png')}}" alt="article1" class="article-img-search">
            <div class="article-paragraph-search">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eligendi aliquid cum excepturi animi
                harum beatae blanditiis temporibus culpa. Modi possimus illo perferendis nisi culpa quos nemo, eos quo
                quas.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dignissimos cum illum reprehenderit beatae,
                aut quia ut fuga ipsum nisi culpa saepe nemo incidunt reiciendis maiores nulla a error blanditiis! Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Delectus eligendi aliquid cum excepturi animi
                harum beatae blanditiis temporibus culpa. Modi possimus illo perferendis nisi culpa quos nemo, eos quo
                quas.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dignissimos cum illum reprehenderit beatae,
                aut quia ut fuga ipsum nisi culpa saepe nemo incidunt reiciendis maiores nulla a error blanditiis! Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Delectus eligendi aliquid cum excepturi animi
                harum beatae blanditiis temporibus culpa. Modi possimus illo perferendis nisi culpa quos nemo, eos quo
                quas.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dignissimos cum illum reprehenderit beatae,
                aut quia ut fuga ipsum nisi culpa saepe nemo incidunt reiciendis maiores nulla a error blanditiis! Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Delectus eligendi aliquid cum excepturi animi
                harum beatae blanditiis temporibus culpa. Modi possimus illo perferendis nisi culpa quos nemo, eos quo
                quas.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dignissimos cum illum reprehenderit beatae,
                aut quia ut fuga ipsum nisi culpa saepe nemo incidunt reiciendis maiores nulla a error blanditiis!
            </div>
        </a>


    </div>

</div>
@endsection