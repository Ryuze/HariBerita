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
				<li class="breadcrumb-item active">Atur Password Anda</li>
        	</ol>
      		</div>
    	</div>
 	</x-slot>
	
    <x-slot name="body">
		<div class="content">
			<div class="container-fluid">
				<x-card outline="primary">
					<x-slot name="title">
						Atur Password Anda
					</x-slot>
					<form action="{{ Route('update.password', $users->id) }}" method="post" enctype="multipart/form-data">
						@if(session('Sukses'))
							<div class="alert alert-success" role="alert">
								{{session('Sukses')}}
							</div>
						@endif

						@if(session('Gagal'))
							<div class="alert alert-danger" role="alert">
								{{session('Gagal')}}
							</div>
						@endif
						@csrf
                        @method('PUT')
                        <div class="form-group">
                            <div>
                                <label for="oldPassword"><strong>Password Sebelumnya</strong></label>
                                <input type="password" class="form-control @error('oldPassword') is-invalid @enderror" name="oldPassword" id="oldPassword" autocomplete="oldPassword" autofocus>
								@error('oldPassword')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
								<br>
                            </div>

							<div>
                                <label for="password"><strong>Password Baru</strong></label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="new-password">
								<br>
								@error('Password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>

							<div>
                                <label for="password_confirmation"><strong>Konfirmasi Password</strong></label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="password_confirmation" required>
								<br>
								@error('Password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<button type="submit" class="btn btn-primary mt-3">{{ __('Update Password')}}</button>
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

