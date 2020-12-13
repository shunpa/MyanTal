<?php 

ob_start();

session_start();

include('../config.php');

include('../adminheader.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>User</title>

	<style type="text/css">

		 #btn1{
		 	margin-left: 408px;
		 }

	</style>
	
</head>
<body>

	
	<?php 

	$user_id = $_GET['user_id'];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $user_id");

	while($row = mysqli_fetch_assoc($result))
	{	

		$user_name = $row['user_name'];
		$email = $row['email'];
		$phone_no = $row['phone_no'];
			//$password = $row['password'];
		$CV = $row['CV'];
		$role_id = $row['role_id'];
			// $role_name = $row['role_name'];

		?>

		<div class="container-fluid">
			<div class="row">

				<div class="col-sm-12">


					<h4 class="header font-weight-bold text-dark" style="text-align: center;">Edit User</h4>
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
				<div class="col col-sm-6" id="form" style="margin-top: 30px;">


					<form action="user-update.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

						<div class="form-group row">
							<label for="user_name" class="col-sm-4">User Name</label>
							<input type="text" name="user_name" class="form-control col-sm-8" placeholder="Enter User Name..." value="<?php echo $user_name; ?>">
						</div>

						<div class="form-group row">


							<label for="email" class="col-sm-4">Email</label>
							<input type="email" name="email" class="form-control col-sm-8" placeholder="Enter Your Email..." value="<?php echo $email; ?>">
						</div>

						<div class="form-group row">


							<label for="phone_no" class="col-sm-4">Phone Number</label>
							<input type="text" name="phone_no" class="form-control col-sm-8" placeholder="Enter Your Phone Number..." value="<?php echo $phone_no; ?>"></div>

							<div class="form-group row">


								<!-- <label>Password</label>
								<input type="password" name="password" placeholder="Enter Password..." value="<?php echo $password; ?>"> -->

								<label class="col-sm-4">Old CV</label>
								<!-- <input type="" name="CV" value="<?php echo $CV; ?>"> -->
								<a href="" name="CV"><?php echo $CV; ?></a>
							</div>

							<div class="form-group row">


								<label for="CV" class="col-sm-4">New CV</label>
								<input type="file" name="CV" class="form-control col-sm-8" accept=".pdf">
							</div>

							<div class="form-group row">


								<!-- <button type="cancel">Cancel</button> -->
								<button type="submit" id="btn1" class="btn btn-outline-primary">Update</button>
							</form>

						<?php } ?>

					</div>
				</div>
			</div>


		</body>
		</html>

		<?php include('../adminfooter.php'); ?>