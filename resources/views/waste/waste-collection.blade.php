
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
            <div class="head-title">
				<div class="left">
					<h1>Waste Collection</h1>

				</div>

			</div>



<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Route optimization for solid waste collection</h3>

					</div>
                    <div id="idadd" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-food-apple">
        <span onclick="document.getElementById('idadd').style.display='none'"
        class="w3-button w3-display-topright">&times;</span>
        <form action="addcollection.php" method="POST">
<h2 class="w3-center">Add Waste Collection Here</h2>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" type='text'class='input-field' name="waste_type" placeholder="Enter Waste Type">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" type='text'class='input-field' name="waste_sched" placeholder="Enter Waste Schedule">
    </div>
</div>


<button font-color="#93DC5C" class="w3-button w3-block w3-green w3-section w3-ripple w3-padding" type='submit' class='submit-btn' name="register_btnve">Submit</button>

</form>


    </div>
  </div>

                    <div id="idedit" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-food-apple">
        <span onclick="document.getElementById('idedit').style.display='none'"
        class="w3-button w3-display-topright">&times;</span>
        <form action="/action_page.php" >
<h2 class="w3-center">Edit Collection Schedule Here</h2>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="last" type="text" placeholder="Enter Schedule">
    </div>
</div>


<button font-color="#93DC5C" class="w3-button w3-block w3-green w3-section w3-ripple w3-padding">Update</button>

</form>
          </div>
  </div>


                    <div id="iddel" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-food-apple">
        <span onclick="document.getElementById('iddel').style.display='none'"
        class="w3-button w3-display-topright">&times;</span>
        <form action="/action_page.php" >
<h1 class="w3-center w3-helvetica">Delete Collection Schedule</h1>
             <h4 class="w3-center">Are you sure you want to delete your account?</h4>



<button class="w3-button w3-red w3-section w3-block w3-ripple ">Delete</button>
            <button class="w3-button w3-block w3-gray w3-section w3-ripple ">Cancel</button>

</form>
          </div>
  </div>



					<table>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30890.05349209397!2d121.01790560619138!3d14.58444413074572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c835c77b9b79%3A0xdc4947c8b9d237f8!2sMandaluyong%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1719582684438!5m2!1sen!2sph" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> </iframe>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Collection Schedule</h3>
                        <i class='bx bx-plus' onclick="document.getElementById('idadd').style.display='block'" type="button" ></i>
                        </div>



						<h5 text-align="center">City divided into efficient routes for Residential Waste Collection</h5>
					</ul>
				</div>
			</div>
		</x-main-container>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="script.js"></script>

</body>
</html>
