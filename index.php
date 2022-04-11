<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>





<!doctype html>
<html lang="en">
  <?php  include_once('head.php')  ?>
  <body>

<?php
if(isset($_POST['user']))
{
$user=$_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$phone=$_POST['phone'];



$sql = "INSERT INTO signup (username, email,password,phone)
VALUES ('$user','$email','$pass','$phone')";



if ($conn->query($sql) === TRUE) {
  include_once("signup.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>



  <form style=" " class="d-flex justify-content-center grow-1" method="post" action="index.php">
  <div>

  <div class="mb-3">
      <h1>Signup </h1>
      <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Username</label>
    <input type="text" name="user" class="form-control" id="exampleInputPassword1">
  </div>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input  name="phone" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">SignUp</button>
  </div>
</form>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>