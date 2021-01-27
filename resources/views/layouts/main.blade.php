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
    <div class="navbar navbar-expand-lg navbar-light box" id="navbar" style="position:fixed;z-index:3">

        
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <a href="{{ url('/')}}" class="navbar-brand" style="color: #ff9343;">CIGNews</a>

            </ul>

            <!-- searchbar -->

            <form class="form-inline my-2 my-lg-0 search" type="get" action="{{ url('/search') }}">

                <div class="search-area">
                    <input class="search-bar" name="query" type="search" placeholder="cari artikel..."
                        aria-label="Search" type="submit">
                   
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
    <footer class="card-footer" style="user-select:none;">
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
    </footer>
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