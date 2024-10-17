
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">


	<title>CWMS Admin</title>
	<link rel="icon" type="image/png" sizes="32x32" href="admin/images/logo.jpg">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/script.js'])
</head>
<body>


    <x-sidebar></x-sidebar>



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>

			<a href="#" class="profile">
				<img src="images/logo.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<x-main-container>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>

				</div>

			</div>

			<ul class="box-info">
				<li>
					<i class='bx bx-id-card'></i>
					<span class="text">
						<h3>{{ $driver }}</h3>
						<p>Total Drivers</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>{{ $count }}</h3>
						<p>Total Users</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-car'></i>
					<span class="text">
						<h3>05</h3>
						<p>Total Vehicles</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Total Waste Collected</h3>

					</div>

					 <div class="charts-card">

            <div id="area-chart"></div>
          </div>

				</div>


				<div class="todo">
					<div class="head">
						<h3>Waste Type Breakdown</h3>
						</div>
						<div class="charts-card">

            <div id="bar-chart"></div>
          </div>


				</div>
			</div>






		</x-main-container>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
<script src="script.js"></script>
<script> // ---------- CHARTS ----------

// BAR CHART
const barChartOptions = {
series: [
	{
	data: [1000, 800, 850, 400, 1500],
	},
],
chart: {
	type: 'bar',
	height: 350,
	toolbar: {
	show: false,
	},
},
colors: ['#246dec', '#cc3c43', '#367952', '#f5b74f', '#4f35a1'],
plotOptions: {
	bar: {
	distributed: true,
	borderRadius: 4,
	horizontal: false,
	columnWidth: '40%',
	},
},
	dataLabels: {
	enabled: false,
},
	legend: {
	show: false,
},
	xaxis: {
	categories: ['Plastic', 'Paper', 'Glass', 'Metal', 'Organic'],
},
yaxis: {
	title: {
	text: 'Count',
	},
},
};

const barChart = new ApexCharts(
document.querySelector('#bar-chart'),
barChartOptions
);
barChart.render();

// AREA CHART
const areaChartOptions = {
series: [
{
  name: 'Waste Collected',
  data: [31, 40, 28, 51, 42, 109, 100, 1,2,3,4,5],
},
{
  name: 'Waste Recycled',
  data: [11, 32, 45, 32, 34, 52, 41, 1,2,3,4,5],
},
{
  name: 'Uranium Recycled',
  data: @json($counts),
},
],
chart: {
height: 350,
type: 'area',
toolbar: {
  show: false,
},
},
colors: ['#4f35a1', '#246dec', 'red'],
dataLabels: {
enabled: false,
},
stroke: {
curve: 'smooth',
},
labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
markers: {
size: 0,
},
yaxis: [
{
  title: {
	text: 'Waste Collected',
  },
},
{
  opposite: true,
  title: {
	text: 'Waste Recycled',
  },
},
],
tooltip: {
shared: true,
intersect: false,
},
};

const areaChart = new ApexCharts(
document.querySelector('#area-chart'),
areaChartOptions
);
areaChart.render();

</script>

</body>
</html>
