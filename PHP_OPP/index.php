<?php require 'conection.php';

$query="SELECT* FROM `usertable` ";
 $querysql=mysqli_query($conn,$query)->fetch_all();
 class user {
   public $name;
   public $email;
   public $password;
   public $phone;
  
 }

 $user = new user ();
 if(isset($querysql)){
   
   
 foreach($querysql as $row){
   
   $user->name=$row[1];
   $user->email=$row[2];
   $user->password=$row[3];
   $user->phone=$row[4];
   
  




echo "<pre>";
 var_dump($user);
echo "</pre>";

 }
 }


?>