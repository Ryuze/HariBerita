<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- navigation -->
    <div class="navbar navbar-expand-lg navbar-light box" id="navbar">

        <a href="{{ url('/')}}" class="navbar-brand" style="color: #ff9343;">CIGNews</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link " id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Kategori
                        <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="" class="dropdown-item bg-grey text-color box">Kultur</a>
                        <a href="" class="dropdown-item bg-grey text-color box">Teknologi</a>
                        <a href="" class="dropdown-item bg-grey text-color box">Politik</a>
                    </div>
                </li>
                <li class="nav-item"><a href="{{ url('/tentang')}}" class="nav-link">Tentang</a></li>
                <li class="nav-item"><a href="{{ url('/kontak')}}" class="nav-link">Kontak</a></li>
            </ul>

            <!-- searchbar -->

            <form class="form-inline my-2 my-lg-0 search">

                <div class="search-area">
                    <input class="search-bar" type="search" placeholder="cari artikel..." aria-label="Search">
                    <button class="search-icon" type="submit"><i class="fa fa-search"></i></button>
                </div>
                <div class="fa fa-search" id="clickSearch"></div>
            </form>
            <i class="fas fa-grip-lines-vertical"></i>

            <div>
                <ul class="navbar-nav mr-auto" style="padding-right: 2em;">
                    <li class="nav-item"><a href="{{ Route('login') }}" class="nav-link"
                            style="padding-right:2em;">Masuk</a></li>
                </ul>
            </div>
        </div>
    </div>

    @Yield('container')

    <!-- footer -->
    <div class="card-footer" style="user-select:none;">
        <div>

            <div class=" text-color" style="width: 20%;">
                <h5 style="text-align: center;">CiGNews</h5>
            </div>
            <!-- Pedoman -->
            <ul class="ul-footer multi-column" style="width: 50%;">
                <a href="{{ url('/tentang')}}">
                    <li>Tentang Kami</li>
                </a>
                <a href="{{ url('/kontak')}}">
                    <li>Kontak</li>
                </a>
                <a href="{{ url('/kode-etik')}}">
                    <li>Kode Etik</li>
                </a>

            </ul>

            <table>
                <table class="garis garis-menu">
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </table>
        </div>
        <div style="color: #f6f6f6; text-align: center; size: 9px;">@2020 Copyright CIGNews</div>
    </div>
    <!-- penutup footer -->

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/javascript.js') }}"></script>

</html>