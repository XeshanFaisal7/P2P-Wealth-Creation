<?php
include('../../database/db_connect.php');

// Add Plan Process//
if(isset($_POST['submit']))
{
	if(($_POST['product']!='') || ($_POST['plan_category']!=''))
	{
	$product=$_POST['product'];
  $plan_category=$_POST['plan_category'];	
	
	$query="INSERT INTO `plan`(`product`,`plan_category`) VALUES ('$product','$plan_category')";
  
	$result=mysqli_query($db,$query);
	   
     if($result)
	   {
	     header("location:add_plan.php?success= New Plan added successfully! ");   
     }

	   else
	   {
       header("location:add_plan.php?invalid= Mysqli query error! Plan not added successfully. ");
	   }	
	}

	else
	{
		echo "<script>
       alert('Please fill the missing values');
       window.location.href='add_plan.php';
       </script>";
	}	
}


//Delete plan Request//
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $delete_plan_query="DELETE FROM `plan` WHERE `id`='$id'";
  $delete_plan_result=mysqli_query($db,$delete_plan_query);
  if($delete_plan_result)
   {
    header("location:manage_plan.php?success= Plan data is deleted successfully! ");
   }
   else
   {
    header("location:manage_plan.php?invalid= Plan data is not deleted successfully! "); 
   } 
 }  
//Delete plan Request//

// Update plan Process//
if(isset($_POST['update']))
{
  if(($_POST['product']!='') || ($_POST['plan_category']!=''))
  {
      $product=$_POST['product'];
      $plan_category=$_POST['plan_category']; 
      $plan_id=$_POST['plan_id'];

      $query="UPDATE `plan` SET `product`='$product',`plan_category`='$plan_category' WHERE `id`='$plan_id'";
      $result=mysqli_query($db,$query);
         if($result)
         {
        header("location:manage_plan.php?success= plan data is updated successfully! ");
         }
         else
         {
        header("location:manage_plan.php?invalid= plan data is not updated successfully! "); 
         } 
  }
} 
// End update plan Process//



?>