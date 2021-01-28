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
          		<li class="breadcrumb-item active">Pengaturan Akun</li>
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
					<a href="{{ Route('user.edit', Auth::User()->id) }}" class="nav-link {{ in_array("edit", explode("/", Request::path())) ? "active" : "" }}">
					<button type="submit" class="btn btn-primary mt-3" style="width:300px">{{ __('Atur Ulang Profil')}}</button></a>
					
					<a href="{{ Route('password.edit', Auth::User()->id) }}" class="nav-link {{ in_array("edit", explode("/", Request::path())) ? "active" : "" }}">
					<button type="submit" class="btn btn-primary mt-3" style="width:300px">{{ __('Atur Ulang Password')}}</button></a>
					
				</x-card>
			</div>
		</div>
	</x-slot>
	<x-slot name="botScripts">
        <script src="/vendor/summernote/summernote-bs4.min.js"></script>
        <script src="/vendor/almasaeed2010/adminlte/plugins/select2/js/select2.full.min.js"></script>
	</x-slot>
</x-admin-layout>

