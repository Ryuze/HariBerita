<x-admin-layout>
    <x-slot name="title">
        User
    </x-slot>

    <x-slot name="botStyle">
        <link rel="stylesheet" href="/vendor/summernote/summernote-bs4.min.css">
    </x-slot>

    <x-slot name="contentHeader">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Tambah user</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="user/index">Home</a></li>
					<li class="breadcrumb-item"><a href="user/index">User</a></li>
					<li class="breadcrumb-item active">Tambah</li>
				</ol>
			</div>
		</div>
    </x-slot>

    <x-slot name="body">
		<div class="content">
			<div class="container-fluid">
				<x-card outline="primary">
					<x-slot name="title">
						Tambah User
					</x-slot>
					<form action="{{ Route('user.store') }}" method="post">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <div>
                                <label for="nama"><strong>Masukkan Nama</strong></label>
                                <input type="text" class="form-control @error('user') is-invalid @enderror" name="name" id="name" 
								style="width:500px">
                               
                            </div>
							<div>
                                <label for="email"><strong>Masukkan Email</strong></label>
                                <input type="text" class="form-control @error('user') is-invalid @enderror" name="email" id="email" 
								style="width:500px">
                               
                            </div>
                            <div>
                                <label for="nama"><strong>Masukkan Password</strong></label>
								<text class="small" style="color: grey;">Password minimal 6 digit</text>
                                <input type="password" class="form-control @error('user') is-invalid @enderror" name="password" id="password"
								style="width:500px" >
								@error('users')
                                    <p class="validation-invalid-label">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
							<button type="submit" class="btn btn-primary mt-3">Simpan</button>
                     </form>       
				</x-card>
			</div>
		</div>
	</x-slot>
    
</x-admin-layout>