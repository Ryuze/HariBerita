<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ Route('index') }}" class="brand-link">
        <img src="/vendor/almasaeed2010/adminlte/dist/img/AdminLTELogo.png" alt="Berita Harian Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Berita Harian</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/vendor/almasaeed2010/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                {{-- <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs text-light">
                        Berita
                    </div>
                    <i class="icon-menu" title="Berita"></i>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ Route('konten.index') }}" class="nav-link {{ in_array("konten", explode("/", Request::path())) ? "active" : "" }}">
                        <i class="bi bi-folder2 ms-1"></i>
                        <p class="ml-2">
                            Konten
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('dashboard/tag') }}" class="nav-link {{ in_array("tag", explode("/", Request::path())) ? "active" : "" }}">
                        <i class="bi bi-bookmark-plus ms-1"></i>
                        <p class="ml-2">
                            Tag
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
