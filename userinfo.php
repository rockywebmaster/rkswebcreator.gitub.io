<?php 


$con = mysqli_connect('localhost','root','','rksiteuserdata');


if($con){

         echo " connection ok";
}else{
      echo "no connection";
  }

mysqli_select_db($con,'usersitedata');


$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment =$_POST['comment'];

$query="insert into userinfodata(user,email,mobile,comments) values ('$name','$email','$mobile','$comment')";

/*echo "$query";*/

 mysqli_query($con,$query);



?>
