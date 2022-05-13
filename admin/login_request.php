<?php 
include '../database/db_connect.php';

session_start();

if (isset($_POST['login'])) 
{
	if(empty($_POST['username']) || empty($_POST['pass']))
	 {
		 header("location:index.php?missing= Username/Password is missing!");
     }
     else
     {
		$username=$_POST['username'];
		$password=md5($_POST['pass']);
		$query = "SELECT * FROM `admin` WHERE  (username='".$username."' and password='".$password."') ";
		$result=mysqli_query($db,$query);
        $row=mysqli_fetch_assoc($result);
        $admin_id=$row['id'];
        $admin_name=$row['name'];

        if($row>0)
            {
                $_SESSION['login_admin']=$username;
                $_SESSION['admin_id']=$admin_id;
                $_SESSION['admin_name']=$admin_name;
               
                   header("location:dashboard/index.php");
                
            }
            else
            {
                header("location:index.php?Invalid= Invalid Username/Password! ");
            }
		
	  }
}

 ?>