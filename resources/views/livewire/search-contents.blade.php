<div>
    <div class="d-flex bd-highlight mb-3">
        <div class="bd-highlight">
            <a href="{{ Route('konten.create') }}" class="btn btn-success">
                <i class="bi bi-plus mr-2"></i>Tambah konten
            </a>
        </div>
        <div class="card-tools ml-auto bd-highlight">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" class="form-control float-right" placeholder="Cari judul" wire:model="searchTerm" />
                <div class="input-group-append">
                    <button class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th style="cursor: pointer;" wire:click="sortBy('creator')">Dibuat oleh</th>
                <th style="cursor: pointer;" wire:click="sortBy('editor')">Diedit oleh</th>
                <th style="cursor: pointer;" wire:click="sortBy('post_time')">
                    Tanggal dibuat
                </th>
                <th></th>
            </tr>
        </thead>
        
        <tbody>
            @forelse ($contents as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->creator }}</td>
                <td>
                    @if ($item->editor !== null)
                        {{ $item->editor }}
                    @else
                        -
                    @endif
                </td>
                <td>{{ $item->post_time }}</td>
                <td>
                    <a href="#" class="btn btn-primary">
                        Lihat konten
                    </a>
                    <div class="btn-group">
                        <ul class="navbar-nav">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-list"></i>
                            </button>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a href="{{ Route('konten.edit', $item->id) }}" class="dropdown-item">Edit</a>
                                <li>
                                    <form action="{{ Route('konten.destroy', $item->id) }}" method="POST" class="confirm">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="dropdown-item submit-form">
                                            Hapus
                                        </button>
                                    </form>
                                </li>
                            </div>
                        </ul>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $contents->links() }}
</div>
