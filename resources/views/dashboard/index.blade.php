<x-admin-layout>
	<x-slot name="title">
		Dashboard
	</x-slot>

	<x-slot name="botStyle">
		<link rel="stylesheet" href="/vendor/chart.js/dist/Chart.css">
	</x-slot>

	<x-slot name="contentHeader">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Starter Page</h1>
			</div>
			{{-- <div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ Route('index') }}">Home</a></li>
				</ol>
			</div> --}}
		</div>
	</x-slot>

	<x-slot name="body">
		<div class="content">
			<div class="container-fluid">
				<x-card outline="primary">
					<x-slot name="title">
						Index
					</x-slot>

					<div class="chartjs-wrapper" style="position: relative; height:40%; width:60%">
						<canvas id="myChart"></canvas>
					</div>

					<p class="h5 mt-2">
						Total berita tahun ini adalah {{ $total }}
					</p>
				</x-card>
			</div>
		</div>
	</x-slot>

	<x-slot name="botScripts">
		<script src="/vendor/chart.js/dist/Chart.bundle.js"></script>
		<script>
			var year = {{ $year }}
			var monthList = <?php echo $data ?>;
			var ctx = document.getElementById('myChart').getContext('2d');
			var chart = new Chart(ctx, {
				// The type of chart we want to create
				type: 'line',

				// The data for our dataset
				data: {
					labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
					datasets: [{
						label: 'Berita per bulan tahun ' + year,
						borderColor: 'rgb(255, 147, 67)',
						backgroundColor: 'rgba(255, 255, 255, 0.1)',
						data: [
							monthList['January'],
							monthList['February'],
							monthList['March'],
							monthList['April'],
							monthList['May'],
							monthList['June'],
							monthList['July'],
							monthList['August'],
							monthList['September'],
							monthList['October'],
							monthList['November'],
							monthList['December'],
						]
					}]
				},

				// Configuration options go here
				options: {}
			});
		</script>
	</x-slot>
</x-admin-layout>