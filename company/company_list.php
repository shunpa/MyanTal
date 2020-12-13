<?php include('../adminheader.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>


</head>

<!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-12">
        <h4 class="header font-weight-bold text-dark"><center>Company List</center></h4>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <a href="company_new.php">
          <button type="button" class="btn btn-outline-primary"><i class="fas fa-plus-circle"></i> Add New</button>
        </a>
      </div>
    </div>
    <?php 
        //Connect with db
        include("../config.php");

        //reterive data to database
        $result=mysqli_query($conn, "SELECT * FROM company c, role r WHERE c.role_id = r.role_id order by c.company_id desc");
    ?>

    <div class="row">
     <?php 
            while ($row=mysqli_fetch_array($result)){
              $company_id=$row['company_id'];
              $company_name=$row['company_name'];
              $logo=$row["logo"];
              $email=$row["email"];
              $phone_no=$row["phone_no"];
              $password=$row['password'];
              $company_type=$row['company_type'];
              $company_website=$row['company_website'];
              $role_id=$row['role_id'];

          ?>
      <div class="col-sm-4">
        <div class="card" style="width: 20rem; padding: 20px; margin: 50px;">
          <img src="./photo/<?php echo $row['logo'] ?>" class="card-img-top" width="200px;" height="200px;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $company_name; ?></h5>
            <p class="card-text"><?php echo $email;?><br><?php echo $phone_no;?><br><?php echo $company_type;?><br><?php echo $company_website;?><br><?php echo $row['role_name'];?></p>
          </div>
<!-- card-body --> 
          <div align="center">
           <a href="company_edit.php?company_id=<?php echo $company_id;?>">
              <button type="button" class="btn btn-outline-info col-4" id="edit">Edit</button>
            </a>
            <a href="company_delete.php?company_id=<?php echo $company_id;?>" onclick="return confirm('Are you sure you want to delete?');">
              <button type="button" class="btn btn-outline-danger col-4" id="delete">Delete</button>
            </a>
          </div>
<!-- card-footer  -->        
        </div>
<!-- card -->
      </div> 
<!-- col -->
      <?php }    ?>
    </div>
<!-- row -->
  </div>


<?php include('../adminfooter.php'); ?>
</body>
</html>