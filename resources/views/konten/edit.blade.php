<x-admin-layout>
    <x-slot name="title">
        Konten
    </x-slot>

    <x-slot name="botStyle">
        <link rel="stylesheet" href="/vendor/summernote/summernote-bs4.min.css">
        <link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <style>
            .select2-container--default .select2-selection--multiple .select2-selection__choice {
                background-color: #007bff;
                border-color: #006fe6;
                color: #ffffff;
                padding: 0 10px;
                margin-top: .31rem;
            }
        </style>
    </x-slot>

    <x-slot name="contentHeader">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Ubah konten</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ Route('index') }}">Home</a></li>
					<li class="breadcrumb-item"><a href="{{ Route('konten.index') }}">Konten</a></li>
					<li class="breadcrumb-item active">Ubah</li>
				</ol>
			</div>
		</div>
    </x-slot>

    <x-slot name="body">
		<div class="content">
			<div class="container-fluid">
				<x-card outline="primary">
                    <x-slot name="title">
                        Ubah
                    </x-slot>

                    <form action="{{ Route('konten.update', $contents->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div>
                                <label for="title"><strong>Judul konten</strong></label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') !== null ? old('title') : $contents->title }}"><br>
                                @error('title')
                                    <p class="validation-invalid-label">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                                <p class="text-muted">Maksimal huruf yang dapat digunakan adalah 255</p>
                            </div>

                            <div>
                                <label for="content"><strong>Isi konten</strong></label>
                                <textarea name="content" id="summernote" class="form-control @error('content') is-invalid @enderror"></textarea>
                                @error('content')
                                    <p class="validation-invalid-label">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>

                            <div>
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image">
    
                                <img src="{{ file_exists(public_path('storage/images/' . $contents->image)) ? asset('storage/images/' . $contents->image) : '' }}" id="preview" alt="" class="img-thumbnail bi bi-image mt-1" width="300px" height="400px"/>
    
                                @error('image')
                                    <p class="validation-invalid-label">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <label for="tags"><strong>Tags</strong></label>
                                <p>
                                    Tag tersimpan di konten ini
                                    <ul class="list-group list-group-horizontal">
                                        @foreach ($tagsPicked as $item)
                                            <li class="list-group-item">{{ $item->tag_name }}</li>
                                        @endforeach
                                    </ul>
                                </p>

                                <p>
                                    <strong>Tambahkan tag baru dibawah ini untuk mengubah tag yang telah disimpan</strong>
                                </p>
                                <select name="tags[]" class="select2" multiple="multiple" data-placeholder="Pilih tag" style="width: 100%;">
                                    @foreach ($tags as $tag)
                                        <option>{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <input type="hidden" name="contentHide" id="contentHide" value="{{ old('content') !== null ? old('content') : $contents->content }}">
                            
                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        </div>
                    </form>
				</x-card>
			</div>
		</div>
    </x-slot>

    <x-slot name="botScripts">
        <script src="/vendor/summernote/summernote-bs4.min.js"></script>
        <script src="/vendor/almasaeed2010/adminlte/plugins/select2/js/select2.full.min.js"></script>
        <script>
            $('document').ready(function(){
                var contentHide = document.getElementById("contentHide").value;
                $('#summernote').summernote('code', contentHide);
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#preview').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#image").change(function(){
                readURL(this);
            });

            $('.select2').select2()

            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
          </script>
    </x-slot>
</x-admin-layout>