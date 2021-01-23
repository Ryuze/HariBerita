<x-admin-layout>
    <x-slot name="title">
        Pengaturan
	</x-slot>

	<x-slot name="botStyle">
		@livewireStyles
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
				<h1 class="m-0 text-dark">Pengaturan</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ Route('index') }}">Home</a></li>
					<li class="breadcrumb-item active">Pengaturan</li>
				</ol>
			</div>
		</div>
	</x-slot>
	
    <x-slot name="body">
		<div class="content">
			<div class="container-fluid">
				<x-card outline="primary">
					<x-slot name="title">
						Atur Akun Anda
					</x-slot>
					<form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div>
                                <label for="nama"><strong>Masukkan Nama</strong></label>
                                <input type="text" class="form-control @error('') is-invalid @enderror" name="nama" id="nama" value=""
								style="width:500px"><br>
                               
                            </div>
							<div>
                                <label for="email"><strong>Masukkan Email</strong></label>
                                <input type="text" class="form-control @error('') is-invalid @enderror" name="email" id="email" value=""
								style="width:500px"><br>
                               
                            </div><div>
                                <label for="nama"><strong>Masukkan Password</strong></label>
                                <input type="text" class="form-control @error('') is-invalid @enderror" name="pass" id="pass" value=""
								style="width:500px"><br>
                               
                            </div>
				</x-card>
			</div>
		</div>
	</x-slot>

</x-admin-layout>