<?php 
$errors = array();
$is_valid_email=true;
if($_SERVER['REQUEST_METHOD']=="POST"){
    $email='';
    if(isset($_POST['txtEmail']) and !empty($_POST['txtEmail'])){
        $email=$_POST['txtEmail'];
    }
    else {
        $is_valid_email = false;
        $errors ['email']="String email is important";
    }
    if(count($errors) == 0)
    {

        header("Location: /index.php");
        exit;
    }
   // echo "<h1>Request POST".$email."</h1>";
}
?>
<?php 
include("header.php");
?>
    
    
    <h1>Login</h1>
    <form method="post">
    <?php if(count($errors)>0) { ?>
        <div class="alert alert-danger" role="alert">
            Danger!!!
         </div>
     <?php } ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control <?php echo  $is_valid_email ? "" :"is-invalid"; ?>" name="txtEmail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="txtPassword" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php 
include("footer.php");
?>