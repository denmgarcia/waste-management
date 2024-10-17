
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


	<script src="script.js"></script>

</body>
</html>
