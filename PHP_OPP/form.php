
  <?php 
  require 'conection.php';
  
if (isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"]; 
    $phone=$_POST["phone"]; 
    $query="INSERT INTO `usertable` VALUES(NULL,'$name','$email','$password',$phone) ";
    mysqli_query($conn,$query);
   
   
   
}
 

?> 
<form action="form.php" method="POST">
<div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
</div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input type="number" name="phone" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
