
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
        <x-navbar></x-navbar>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<x-main-container>
			<div class="table-data">
				<div class="order">
					<div class="head">


					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Role</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>

                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td></td>
                                    <td class="flex self-center"><x-secondary-button class="status pending">Delete</x-secondary-button><x-secondary-button class="status process">Update</x-secondary-button></td>

                                </tr>
                            @endforeach






						</tbody>
					</table>
				</div>

			</div>
		</x-main-container>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="script.js"></script>

</body>
</html>
