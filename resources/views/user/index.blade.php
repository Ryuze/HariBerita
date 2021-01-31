<x-admin-layout>
    <x-slot name="title">
        User
	</x-slot>

	<x-slot name="botStyle">
		@livewireStyles
	</x-slot>

    <x-slot name="contentHeader">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Daftar User</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="user/index">Home</a></li>
					<li class="breadcrumb-item active">User</li>
				</ol>
			</div>
		</div>
	</x-slot>

    <x-slot name="body">
		<div class="content">
			<div class="container-fluid">
				<x-card outline="primary">
					<x-slot name="title">
						
					<!-- </x-slot>
                    
				</x-card> -->
				<div>
    <div class="d-flex bd-highlight mb-3">
        <div class="bd-highlight">
            <a href="user/create" class="btn btn-success">
                <i class="bi bi-plus mr-2"></i>Tambah User
            </a>
        </div>
    </div>
	<div>
	<table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th style="cursor: pointer;" wire:click="sortBy('name')">Nama</th>
                <th style="cursor: pointer;" wire:click="sortBy('email')">Email</th>
				<th style="cursor: pointer;" wire:click="sortBy('created_at')">Tanggal Dibuat</th>
				<th style="cursor: pointer;" wire:click="sortBy('edited_at')">Tanggal Diedit</th>
				<th></th>
            </tr>
        </thead>
        
        <tbody>
			<?php $no = 1; ?>
            @foreach ($user as $u)
            <tr>
					
					<td><?php echo $no ?></td>
					<td><?= $u->name ?></td>
					<td><?= $u->email ?></td>
					<td><?= $u->created_at ?></td>
					<td><?= $u->updated_at ?></td>
					
					<td><a href="edit/" class="btn btn-primary">
                        Edit
                    </a>
					<a href="/dashboard/user/delete/{{ $u->id }}" class="btn btn-warning" onclick="return confirm('Apakah anda yakin?')">
                        Hapus
                    </a>
					</td>
            </tr>
			<?php $no++ ?>
            @endforeach	
        </tbody>
    </table>
	</div>
	</x-slot>


</x-admin-layout>
