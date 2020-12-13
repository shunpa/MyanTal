<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<div id="banner3">
<?php include("header.php"); ?>
<div class="container" id="navtitle" align="center">
      <div class="row justify-content-center text-center">
         <div class="col-8 my-5">
          <h1>Login to Your <span id=heading2>Profile</span></h1>
          </div>
       </div>
<div class="col-lg-6">
  <form>
  <div class="form-group my-5">
     
  <input class="form-control transparent-input" type='text' name='name' placeholder="Email"  required > 
</div>
<div class="form-group">
  
  <input class="form-control transparent-input" type='password' name='name' id="myInput" placeholder="Password" required  > <span><i class="far fa-eye-slash" onclick="myFunction()"></i></span>
</div>
 <div classs="form-group">
            <a href="" type="submit" id="btnregister" class="btn bg-transparent">Register</a>
            <button type="submit" id="btnlogin" >Login</button>
            </div>
<div class="form-group my-5">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Remember Me</label><br>
  <a href="" style="text-decoration: none;"><h4 style="color: black ;">Forget Password</h4></a>
 </div>
  
</form>
</div>

 


    </div>
     </div>
     <?php include("footer.php"); ?>