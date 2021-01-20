<x-admin-layout>
    <x-slot name="title">
        Konten
	</x-slot>

	<x-slot name="botStyle">
		@livewireStyles
	</x-slot>

    <x-slot name="contentHeader">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Daftar konten</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ Route('index') }}">Home</a></li>
					<li class="breadcrumb-item active">Konten</li>
				</ol>
			</div>
		</div>
	</x-slot>
	
    <x-slot name="body">
		<div class="content">
			<div class="container-fluid">
				<x-card outline="primary">
					<x-slot name="title">
						Konten
					</x-slot>
                    @livewire('search-contents')
				</x-card>
			</div>
		</div>
	</x-slot>

	<x-slot name="botScripts">
        <script>
			$('.confirm').click(function(){
				var conf = confirm('Yakin untuk menghapus data?');

				if (conf)
				{
					this.form.submit();
				}else {
					return false;
				}
			})
		</script>
		@livewireScripts
    </x-slot>
</x-admin-layout>