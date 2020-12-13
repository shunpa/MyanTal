<?php 
	
	include('../config.php');

	include('../adminheader.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Job</title>

	<!------------CSS-------------->
	<link rel="stylesheet" href="../css/bootstrapmin.css">

	<!------------JS-------------->
	<script src="../js/jquerymin.js"></script>
	<script src="../js/poppermin.js"></script>
	<script src="../js/bootstrapmin.js"></script>

	<!------------font-------------->
	<link rel="stylesheet" href="../font/fontawesomemin.css">

	<!-- <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> -->

	<style>

		* {
			box-sizing: border-box;
		}

		body {
			background-color: #f1f1f1;
		}

		#regForm {
			clear: both;
			background-color: #ffffff;
			margin: 100px auto;
			margin-top: 30px;
			margin-bottom: 30px;
			/*font-family: Raleway;*/
			padding: 40px;
			width: 580px;
			min-width: 300px;
			border-radius: 10px;
		}

		h1 {
  			text-align: center;
  			padding-bottom: 20px;
  			font-size: 30px;  
		}

		input {
			padding: 10px;
			width: 100%;
			font-size: 17px;
			/*font-family: Raleway;
*/			border: 1px solid #aaaaaa;
			border-radius: 4px;
		}

		input.invalid {
			background-color: #ffdddd;
		}

		textarea {
			padding: 10px;
			width: 100%;
			font-size: 17px;
			border: 1px solid #aaaaaa;
			border-radius: 4px;
			height: 200px;
		}

		textarea.invalid {
			background-color: #ffdddd;
		}

		select {
			padding: 10px;
			width: 100%;
			font-size: 17px;
			border: 1px solid #aaaaaa;
			border-radius: 4px;
		}

		/*select.invalid {
			background-color: #ffdddd;
		}*/

		.tab {
			display: none;
		}

		button {
			background-color: #fbea44;
			color: #ffffff;
			border: none;
			padding: 10px 20px;
			font-size: 17px;
			/*font-family: Raleway;
*/			cursor: pointer;
			border-radius: 5px;
		}

		#btn1 {
			background-color: #fbea44;
			color: #ffffff;
			border: none;
			padding: 10px 20px;
			font-size: 17px;
			/*font-family: Raleway;
*/			border-radius: 5px;
			float: right;
			margin-right: 20px;
			outline: none;
		}

		button:hover {
  			opacity: 0.8;
		}

		#prevBtn {
  			background-color: #bbbbbb;
  			outline: none;
		}

		#nextBtn {
			outline: none;
		}

		.step {
			height: 10px;
			width: 10px;
			margin: 0 2px;
			background-color: #bbbbbb;
			border: none;
			border-radius: 50%;
			display: inline-block;
			opacity: 0.5;
		}

		.step.active {
			opacity: 1;
		}

		.step.finish {
			background-color: #fbea44;
		}

	</style>

</head>

<body>


	<a href="job-list.php">
		<button type="button" id="btn1"><i class="fas fa-fast-backward"></i> Go Back</button>
	</a>

	<form id="regForm" action="job-add.php" method="post" enctype="multipart/form-data">

		<h1>Job Form</h1>

		<div class="tab">
			<p>
				<label for="job_name">Job Name</label>
				<input type="text" name="job_name" placeholder="Enter Job Name..." oninput="this.className = ''">
			</p>
			<p>
				<label for="text">Job Description</label>
				<textarea name="text" placeholder="Enter Job Description..." oninput="this.className = ''"></textarea>
			</p>
			<p>
				<label for="requirement">Job Requirement</label>
				<textarea name="requirement" placeholder="Enter Job Requirement..." oninput="this.className = ''"></textarea>
			</p>
			<p>
				<label for="benefit">Benefit</label>
				<textarea name="benefit" placeholder="Enter Benefit..." oninput="this.className = ''"></textarea>
			</p>
		</div>

		<div class="tab">
			<p>
				<label for="gender">Gender</label>
				<input type="text" name="gender" placeholder="eg. Male/Female - 3 Posts" oninput="this.className = ''">
			</p>
			<p>
				<label for="salary">Salary</label>
				<input type="text" name="salary" placeholder="Enter Salary..." oninput="this.className = ''">
			</p>
			<p>
				<label for="region">Region</label>
				<input type="text" name="region" placeholder="Enter Region..." oninput="this.className = ''">
			</p>
			<p>
				<label for="location">Location</label>
				<input type="text" name="location" placeholder="Enter Location..." oninput="this.className = ''">
			</p>
		</div>

		<div class="tab">
			<p>
				<label for="jobfile">Upload Job File(pdf only and file shouldn't be larger than 1MB)</label>
				<input type="file" name="jobfile" accept=".pdf" oninput="this.className = ''">
			</p>
			<p>
				<label for="jc_id">Job Category</label>
				<select name="jc_id">
					<option value="0">*** Choose ***</option>
					<?php  

						$result1 = mysqli_query($conn, "SELECT jc_id, jc_name FROM jobcategory");
						while($row1 = mysqli_fetch_assoc($result1)): ?>
							<option value="<?php echo $row1['jc_id'] ?>">
								<?php echo $row1['jc_name'] ?>
							</option>
					<?php endwhile; ?>
				</select>
			</p>
			<p>
				<label for="jt_id">Job Type</label>
				<select name="jt_id">
					<option value="0">*** Choose ***</option>
					<?php 

						$result2 = mysqli_query($conn, "SELECT jt_id, jt_name FROM jobtype");
						while($row2 = mysqli_fetch_assoc($result2)): ?>
							<option value="<?php echo $row2['jt_id'] ?>">
								<?php echo $row2['jt_name'] ?>
							</option>

					<?php endwhile; ?>
				</select>
			</p>
		</div>

		<div style="overflow:auto;">
			<div style="float:right;">
				<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
				<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
			</div>
		</div>

		<div style="text-align:center; margin-top:27px;">  <!-- 40px -->
			<span class="step"></span>
			<span class="step"></span>
			<span class="step"></span>
		</div>

	</form>

	<script>
		var currentTab = 0;
		showTab(currentTab);

		function showTab(n) {

			var x = document.getElementsByClassName("tab");
			x[n].style.display = "block";

			if (n == 0) {
				document.getElementById("prevBtn").style.display = "none";
			} else {
				document.getElementById("prevBtn").style.display = "inline";
			}
			if (n == (x.length - 1)) {
				document.getElementById("nextBtn").innerHTML = "Submit";
			} else {
				document.getElementById("nextBtn").innerHTML = "Next";
			}

			fixStepIndicator(n)
		}

		function nextPrev(n) {

			var x = document.getElementsByClassName("tab");

			if (n == 1 && !validateForm()) return false;

			x[currentTab].style.display = "none";

			currentTab = currentTab + n;

			if (currentTab >= x.length) {

				document.getElementById("regForm").submit();
				return false;
			}
			showTab(currentTab);
		}

		function validateForm() {

			var x, y, z, i, j, valid = true;
			x = document.getElementsByClassName("tab");
			y = x[currentTab].getElementsByTagName("input");
			z = x[currentTab].getElementsByTagName("textarea");

		
			for (i = 0; i < y.length; i++) {

				if (y[i].value == "") {

					y[i].className += " invalid";

					valid = false;
				}
			}

			for(j = 0; j < z.length; j++){

				if(z[j].value == ""){

					z[j].className += "invalid";

					valid = false;
				}
			}


			/* for (var i = 0, j = 1, n = 2; i < 50, n < 50; i = i + 3, j = j + 3, n = n + 3){
    			console.log("variable i: " + i);
   				console.log("variable j: " + j);
    			console.log("variable n: " + n);
				}
			*/


			if (valid) {
				document.getElementsByClassName("step")[currentTab].className += " finish";
			}
			return valid; 
		}

		function fixStepIndicator(n) {

			var i, x = document.getElementsByClassName("step");
			for (i = 0; i < x.length; i++) {
				x[i].className = x[i].className.replace(" active", "");
			}

			x[n].className += " active";
		}
		
	</script>

</body>
</html>

<?php include('../adminfooter.php'); ?>