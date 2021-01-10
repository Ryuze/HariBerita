@extends('layouts/main')

@section('title', 'Artikel')

@section('container')
<!-- body -->
<div class=" container-fluid" style="padding-top: 2em;margin-bottom: 2em;">

<div class=" jumbotron-fluid">
    <div class="container">
<!-- gambar -->
        <img src="{{asset('img/banner.png')}}" alt="article1" class="article-img content-img">
    </div>
</div>
</div>

<!-- content -->

<div class="container-artikel container-fluid">
<button class="btn article-tag" style="margin-bottom: 1em;">tag artikel</button>
<div class="article card-deck card-header">
    <h5 class="article-title">judul 1</h5>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis vehicula neque dapibus pharetra. Nulla at maximus lectus, eu feugiat nibh. Phasellus vehicula leo enim, in malesuada tellus efficitur eget. Integer diam erat, fringilla id efficitur nec, scelerisque in dui. Praesent eget sem placerat, tempus sem at, auctor dui. Curabitur mollis turpis sed velit posuere mollis. Sed mattis sem sed lacus hendrerit elementum. Phasellus egestas eget ex quis sagittis. Quisque eu sollicitudin magna. Vivamus gravida, libero sit amet porttitor condimentum, est felis malesuada dui, ac imperdiet ex tellus et justo. Quisque egestas sem eget aliquam aliquam. Morbi tincidunt ipsum non fringilla tempus. Duis vulputate velit lacus, vel gravida magna lacinia vitae. Cras a venenatis ante. Donec vitae sagittis magna. Pellentesque at efficitur erat.

Donec sodales, purus non venenatis gravida, lectus tortor rhoncus massa, dignissim sollicitudin neque lectus non elit. Curabitur sit amet ullamcorper dolor. Maecenas sit amet lorem lobortis, pulvinar nulla in, ultricies est. Curabitur sed felis quis nisl lacinia ornare quis quis sapien. Donec rhoncus, lacus nec interdum placerat, nulla lectus gravida velit, non pretium purus leo vel ligula. Nulla maximus dolor eu urna maximus porta. Duis non pharetra ipsum. Cras tincidunt tristique malesuada. Quisque blandit ante nisl, a dignissim justo interdum sit amet.

Praesent ut mi neque. Duis ullamcorper risus at rutrum eleifend. Duis bibendum, sem ut congue rhoncus, turpis lacus pulvinar mauris, in rutrum tortor massa non augue. Vestibulum nec blandit quam. In vitae arcu sagittis nisi rutrum venenatis eu nec mi. Donec suscipit mauris eu ipsum blandit, a laoreet metus sodales. Quisque ut augue nisl. Donec tempus magna neque, id laoreet erat posuere eget. Praesent leo felis, scelerisque ac erat quis, auctor bibendum libero. Nulla vitae quam posuere, finibus quam tristique, dignissim sapien. Suspendisse vel felis eu leo tempor lobortis accumsan in erat.

Nullam semper dolor in libero pretium, eu tincidunt urna condimentum. Mauris at nibh egestas, cursus orci eget, laoreet ipsum. Vestibulum consectetur felis venenatis tortor faucibus, in vulputate massa ornare. Aenean tristique arcu lectus, in consequat purus maximus vel. Sed pretium mauris vel pellentesque maximus. Etiam rhoncus enim nibh, nec lacinia massa fringilla non. Proin eu ornare libero, non facilisis ligula. Donec euismod sit amet enim nec auctor. Mauris a massa a lectus pretium imperdiet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent posuere risus non augue ultricies efficitur.

Vestibulum convallis enim sit amet quam congue, quis tincidunt diam euismod. In lacinia, ante ac ornare pulvinar, tellus justo pretium felis, non mollis est urna vel sapien. Ut mollis sapien a ipsum euismod, quis commodo turpis pharetra. Duis dapibus porttitor elit id cursus. Aenean at scelerisque mauris, non maximus mauris. Vivamus dapibus tortor ut blandit consectetur. In non tempor ex.
    </p>
</div>

</div>
@endsection