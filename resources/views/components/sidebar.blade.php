	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bx-leaf'></i>
			<span class="text">CWMS Admin</span>
		</a>

		<ul class="side-menu top">
			<li @if (request()->routeIs('dashboard'))
                class="active"
            @endif>
				<a href="/dashboard">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li @if (request()->routeIs('waste-collection'))
                class="active"
                @endif>
				<a href="/waste-collection">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Waste Collection</span>
				</a>
			</li>
			<li @if (request()->routeIs('waste-type'))
                class="active"
                @endif>
				<a href="/waste-type">
					<i class='bx bxs-trash' ></i>
					<span class="text">Waste Type</span>
				</a>
			</li>
			<li >
				<a href="transportation.php">
					<i class='bx bx-id-card' ></i>
					<span class="text">Drivers</span>
				</a>
			</li>
			<li>
				<a href="vehicles.php">
					<i class='bx bxs-truck' ></i>
					<span class="text">Vehicles</span>
				</a>
			</li>
			<li @if (request()->routeIs('users'))
                class="active"
                @endif>
				<a href="/users">
					<i class='bx bxs-group' ></i>
					<span class="text">Users</span>
				</a>
			</li>
			<li>
				<a href="publicawareness.php">
					<i class='bx bxs-megaphone' ></i>
					<span class="text">Public Awareness</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="indexadmin.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->
