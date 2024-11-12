<form action="" method="post"><br><br>
user_name:<input type="text" name="username"><br></br>
password:<input type="password" name="password"><br></br>
email:<input type="email" name="email"><br></br>
submit:<input type ="submit" name="save">
</form>
<?php
if(isset($_post["save"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $email=$_POST["email"];


$con=mysqli_connect("localhost","root","","dua");
if(!$con){
    echo "connect successfully";
}
$q="INSERT INTO `username`(`username`, `password`, `email`) VALUES ('$username','$password','$email')";
$run=mysqli_query($con,$q);
if($run){
    "<script>alert('connection successfully built')</script>";
}else{
    "<script>alert('failed')</script>";
}

}

?>
