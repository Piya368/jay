<?php 
     $fname = "";
     $lname = "";
     $address = "";
     $gender = "";
     $phone = "";
     $email = "";
     $username = "";
     $password = "";
     $id = 0;

     $db = mysqli_connect('localhost','root','','registrationform');

     if (isset($_POST['submit'])) {
     	$fname = $_POST['fname'];
     $lname =$_POST ['lname'];
     $address = $_POST['address'] ;
     $gender = $_POST['gender'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $username = $_POST['username'];
     $password =$_POST['password'];

     $query = "INSERT INTO info (fname,lname,address,gender,phone,email,username,password) VALUES ('$fname','$lname','$address','$gender','$phone','email','$username','$password')";
          mysqli_query($db,$query);
          header('location:index.php');

     }
 ?>