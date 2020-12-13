
<?php include('../config.php'); ?>
<?php include('../adminheader.php'); ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>


</head>

<body>
  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-12">
        <h4 class="header font-weight-bold text-dark"><center>
        Create New Company</center></h4>
      </div>

    </div>

      <div class="row">

      <div class="col-sm-12">

        <a href="company_list.php">
          <button type="button" class="btn btn-outline-primary"><i class="fas fa-fast-backward"></i> Go Back</button>
        </a>
      </div>

    </div>
  <div class="row">
    <div class="col col-sm-6" id="form">

      <form action="company_add.php" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="company_name" class="col-sm-4 form-label">Company name</label>
              <input type="text" name="company_name" class="form-control col-sm-8" 
              placeholder="Enter Name"
              required="true">
          </div>

          <div class="form-group row">
            <label for="logo" class="col-sm-4 form-label">Logo</label>
              <input type="file" name="logo" class="form-control col-sm-8" 
              required="true">
          </div>

          <div class="form-group row">
            <label for="email" class="col-sm-4 form-label">Email</label>
              <input type="email" name="email" class="form-control col-sm-8" 
              placeholder="email@gmail.com"
              required="true">
          </div>

          <div class="form-group row">
            <label for="phone_no" class="col-sm-4 form-label">Phone No</label>
              <input type="tel" name="phone_no" class="form-control col-sm-8" 
              placeholder="xxxxxxxxxxx" pattern="^\d{11}$" 
              required="true"> <!-- "^\d{3}-\d{3}-\d{4}$" -->
          </div>

          <div class="form-group row">
            <label for="password" class="col-sm-4 form-label"> Password </label>
              <input type="password" name="password" class="form-control col-sm-8" 
              placeholder="Enter Password" pattern=".{8,}" title="8 or more characters ..." 
              required="true">
          </div>

          <div class="form-group row">
            <label for="company_type" class="col-sm-4 form-label"> Company Type </label>
              <input type="text" name="company_type" class="form-control col-sm-8" 
              placeholder="Enter Company_type"
              required="true">
          </div>

          <div class="form-group row">
            <label for="company_website" class="col-sm-4 form-label"> Company_website </label>
              <input type="text" name="company_website" class="form-control col-sm-8" 
              placeholder="Enter company_website"
              required="true">
          </div>

          <div class="form-group row">
            <label class="col-sm-4 form-label" for="inlineFormCustomSelect">Role name</label>
              <select class="custom-select col-sm-8" id="inlineFormCustomSelect" name="role_id" required>
                <option value="0">-- Choose --</option>
                  <?php 
                      $result2 = mysqli_query($conn, "SELECT role_id, role_name FROM role");

                  while($row2 = mysqli_fetch_assoc($result2)): ?>

                <option value="<?php echo $row2['role_id'] ?>">
                  <?php echo $row2['role_name'] ?>
                </option>

                  <?php endwhile; ?>

              </select>     
          </div>

          <button type="submit" class="btn btn-outline-primary" >Submit</button>
          <button type="reset" class="btn btn-outline-danger">Cancel</button>
         
      </form>
    </div>
  </div>
</div>

<?php include('../adminfooter.php'); ?>

</body>
</html>
