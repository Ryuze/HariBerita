<x-admin-layout>
	<x-slot name="title">
		Pengaturan Akun
	</x-slot>

	<x-slot name="botStyle">
        <link rel="stylesheet" href="/vendor/summernote/summernote-bs4.min.css">
        <link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    </x-slot>

	<x-slot name="contentHeader">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Pengaturan Akun</h1>	
			</div>

			<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="{{ Route('index') }}">Home</a></li>
				<li class="breadcrumb-item"><a href="{{ Route('user.profil', Auth::User()->id) }}">Pengaturan Akun</a></li>
				<li class="breadcrumb-item active">Atur Profil Anda</li>
        	</ol>
      		</div>
    	</div>
 	</x-slot>
	
    <x-slot name="body">
		<div class="content">
			<div class="container-fluid">
				<x-card outline="primary">
					<x-slot name="title">
						Atur Profil Anda
					</x-slot>
					<form action="{{ Route('user.update', $users->id) }}" method="post" enctype="multipart/form-data">
						@if(session('Sukses'))
							<div class="alert alert-success" role="alert">
								{{session('Sukses')}}
							</div>
						@endif
						@csrf
                        @method('PUT')
                        <div class="form-group">
                            <div>
                                <label for="name"><strong>Nama</strong></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ $users['name'] }}" autocomplete="name" autofocus>
								<br>
                            </div>

							<div>
                                <label for="email"><strong>Email</strong></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ $users['email']}}">
								<br>
							</div>
							<button type="submit" class="btn btn-primary mt-3">{{ __('Update Profil')}}</button>
						</div>
					</form>
				</x-card>
			</div>
		</div>
	</x-slot>
	<x-slot name="botScripts">
        <script src="/vendor/summernote/summernote-bs4.min.js"></script>
        <script src="/vendor/almasaeed2010/adminlte/plugins/select2/js/select2.full.min.js"></script>
	</x-slot>
</x-admin-layout>

