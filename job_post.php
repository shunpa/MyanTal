<?php  include("header.php");

  include('config.php');

?>

<script type="text/javascript">
  $(document).ready(function(){
    $("#heart").click(function(){
      if($("#heart").hasClass("liked")){
        $("#heart").html('<i class="far fa-heart"></i></i>');
        $("#heart").removeClass("liked");
      }else{
        $("#heart").html('<i class="fa fa-heart" aria-hidden="true"></i>');
        $("#heart").addClass("liked");
      }
    });
  });


  $(document).ready(function(){
    $("#heart1").click(function(){
      if($("#heart1").hasClass("liked")){
        $("#heart1").html('<i class="far fa-heart"></i></i>');
        $("#heart1").removeClass("liked");
      }else{
        $("#heart1").html('<i class="fa fa-heart" aria-hidden="true"></i>');
        $("#heart1").addClass("liked");
      }
    });
  });
  $(document).ready(function(){
    $("#heart2").click(function(){
      if($("#heart2").hasClass("liked")){
        $("#heart2").html('<i class="far fa-heart"></i></i>');
        $("#heart2").removeClass("liked");
      }else{
        $("#heart2").html('<i class="fa fa-heart" aria-hidden="true"></i>');
        $("#heart2").addClass("liked");
      }
    });
  });
  $(document).ready(function(){
    $("#heart3").click(function(){
      if($("#heart3").hasClass("liked")){
        $("#heart3").html('<i class="far fa-heart"></i></i>');
        $("#heart3").removeClass("liked");
      }else{
        $("#heart3").html('<i class="fa fa-heart" aria-hidden="true"></i>');
        $("#heart3").addClass("liked");
      }
    });
  });
</script>
<div class="container" id="navtitle">
  <div class="row justify-content-center text-center">
   <div class="col-lg-12">
    <h1 id="job" align="center">Browse Jobs </h1>

  </div>
</div>
<div class="row">
        <!-- <div class="col-lg-4 col-md-6 col-sm-6">
<div class="card" id="card2" style="width:18rem;">
  <div class="card-body">
    <h5 class="job">Job Name</h5>
    <label class="radio">Junior Web designer
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="radio">Senior Developer
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="radio">Digital Marketer
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="radio">Sale Assistant
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
  </div>
</div>
<br>
<div class="card" style="width:18rem;">
  <div class="card-body">
   <h5>Job Type</h5>
  </div>
</div>
</div> -->

<?php 

  $jc_id = $_GET['jc_id'];

  $result1 = mysqli_query($conn, "SELECT * FROM jobcategory WHERE jc_id = $jc_id");
  $row1 = mysqli_fetch_assoc($result1);


  $result = mysqli_query($conn, "SELECT * FROM job jb, jobcategory jc, jobtype jt WHERE jb.jc_id = jc.jc_id and jb.jt_id = jt.jt_id and jb.jc_id = $jc_id ORDER BY jb.job_id DESC");

  /*$result2 = mysqli_query($conn, "SELECT * FROM company");
  $row2 = mysqli_fetch_assoc($result2);
*/

  ?>



<div class="col-lg-12 col-md-6 col-sm-6">



  <h4 id="job2" name="jc_id" value="<?php echo $row1['jc_id'] ?>" >Job Category/ <?php echo $row1['jc_name']; ?></h4>


    
  <?php

    while($row=mysqli_fetch_assoc($result))
    { 
      $job_id = $row['job_id'];
      $job_name = $row['job_name'];
     
      $jc_id = $row['jc_id'];
      $jc_name = $row['jc_name'];

      $jt_id = $row['jt_id'];
      $jt_name = $row['jt_name'];

      $post_date = $row['post_date'];

      ?>

      

      <div class="kan">
        <div class="card" style="width:100% "    id="card3">
          <div class="card-body" id="someClass">

            <div class="row">
              <div class="img col-lg-1">

                <img src="images/home page/44.png"  class="image" width="60px;" height="60px"> 
            <!--  <div class="middle">
                    <div class="text">View Detail</div>
                  </div>
          --> </div>



          <div class="col-lg-4">

            <h5><?php echo $job_name; ?></h5>

            <!-- Testing -->
            <p><span id="fade">Job Category:</span> <?php echo $jc_name; ?></p>

            <p id="fade"><?php echo $jt_name; ?></p>
          </div>
          <div class="img col-lg-1">
            <i class="far fa-calendar-alt fa-2x" style="color: #f9b940"></i>
          </div>
          <div class="col-lg-2">
            <p class="calendar"><?php echo $post_date; ?></p>
          </div>
          <div class="col-lg-1">
            <span id = heart><i class="far fa-heart"></i> </span>

          </div>
          <div class="col-lg-3">
            <button type="submit" id="btn3">View Detail</button>
          </div>


        </div>
      </div>
    </div>
  </div>

  <?php } ?>


</div>
</div>
</div>
<?php include("footer.php"); ?>