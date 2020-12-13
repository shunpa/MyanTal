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


</head>
<body>

	<?php 

	$result = mysqli_query($conn, "SELECT * FROM user ur, role re WHERE ur.role_id = re.role_id ORDER BY ur.user_id DESC");

	?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">

				<h4 class="header font-weight-bold text-dark" style="text-align: center;">User List</h4>
			</div>
		</div>

		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="table-responsive">

					<a href="user.php">
						<button type="button" class="btn btn-outline-primary"><i class="fa fa-plus-circle"></i> Add New</button>
					</a>

					<table class="table" cellspacing="0">
						<thead>

							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>Click below to download CV</th>
								<th>Role</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						
						<tbody>
							<tr>
								<?php 

								while($row=mysqli_fetch_assoc($result))
								{	
									$user_id = $row['user_id'];
									$user_name = $row['user_name'];
									$email = $row['email'];
									$phone_no = $row['phone_no'];
									$CV = $row['CV'];
									$role_id = $row['role_id'];
									$role_name = $row['role_name'];

									?>

									<td><?php echo $user_name; ?></td>
									<td><?php echo $email; ?></td>
									<td><?php echo $phone_no; ?></td>
									<td>
										
										<a download="<?php echo $CV; ?>" href="./userCV/<?php echo $CV; ?>">
											<?php echo $CV; ?>
										</a>
										
									</td>
									<td value="<?php echo $role_id; ?>" name="role_id">
										<?php echo $role_name; ?>		
									</td>

									<td>
										<a href="user-delete.php?user_id=<?php echo $user_id; ?>" onclick="return confirm('Are you sure want to delete?');">
											<button type="button" id="delete" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
										</a>
									</td>
									<td>
										<a href="user-edit.php?user_id=<?php echo $user_id; ?>">
											<button type="edit" id="edit" class="btn btn-outline-info"><i class="fas fa-edit"></i></button>
										</a>
									</td>
								</tr>

							<?php } ?>

						</tbody>

					</table>

				</div>
			</div>
		</div>
	</div>

</body>
</html>

<?php include('../adminfooter.php'); ?>