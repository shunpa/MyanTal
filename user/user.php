<?php 

ob_start();

session_start();

	//include('../config.php');

include('../adminheader.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>User</title>

	

	<!-- <style>

		#toggle{
			position: absolute;
			top: 220px;
			right: 47px;
			transform: translateY(-50%);
			width: 20px;
			height: 20px;
			background: url(visibility.png);
			background-size: cover;
			cursor: pointer;
		}

		#toggle.hide{
			background: url(invisible.png);
			background-size: cover;
		}


	</style> -->

	<style type="text/css">
		
		#btn1 {
			margin-left: 320px;
		}

	</style>
	
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">

				<h4 class="header font-weight-bold text-dark" style="text-align: center;">User Form</h4>
			</div>
		</div>	

		<div class="row">
			<div class="col-sm-12">


				<a href="user-list.php">
					<button type="button" class="btn btn-outline-primary"><i class="fas fa-fast-backward"></i> Go Back</button>
				</a>
			</div>
		</div>


		<div class="row">
			<div class="col col-sm-6" id="form">

				<form action="user-add.php" method="post" enctype="multipart/form-data">
					<div class="form-group row">
						<label for="user_name" class="col-sm-4">User Name</label>
						<input type="text" name="user_name" class="form-control col-sm-8" placeholder="Enter User Name..." required="true">
					</div>

					<div class="form-group row">


						<label for="email" class="col-sm-4">Email</label>
						<input type="email" name="email" class="form-control col-sm-8" placeholder="Enter Your Email..." required="true">
					</div>

					<div class="form-group row">


						<label for="phone_no" class="col-sm-4">Phone Number</label>
						<input type="text" name="phone_no" class="form-control col-sm-8" placeholder="Enter Your Phone Number..." required="true">
					</div>

					<div class="form-group row">


						<label class="col-sm-4">Password</label>
						<input type="password" name="password" class="form-control col-sm-8" id="password" placeholder="Enter Password..." required="true">

						<div id="toggle" onclick="showHide();"></div>

						<!-- <script>

							const password = document.getElementById('password');
							const toggle = document.getElementById('toggle');

							function showHide(){
								if(password.type === 'password')
								{
									password.setAttribute('type', 'text');
									toggle.classList.add('hide');
								}
								else
								{
									password.setAttribute('type', 'password');
									toggle.classList.remove('hide');
								}
							}

						</script> -->

					</div>

					<div class="form-group row">


						<label for="CV" class="col-sm-4">Upload Your CV(pdf only)</label>
						<input type="file" name="CV" class="form-control col-sm-8" required="true" accept=".pdf"><br> <!-- accept=".pdf,.doc" -->
					</div>

					<div class="form-group row">


						<input type="hidden" name="role_id" value=2>

						<button type="cancel" id="btn1" class="btn btn-outline-danger">Cancel</button>
						<button type="submit" class="btn btn-outline-primary">Submit</button>
					</form>

				</div>
			</div>
		</div>
	</body>
	</html>

	<?php include('../adminfooter.php'); ?>