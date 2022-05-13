<?php
include('../../database/db_connect.php');

// Add company Process//
if(isset($_POST['submit']))
{
	if($_POST['company']!='' )
	{
	$company=$_POST['company'];	
	
	$query="INSERT INTO `company`(`company`) VALUES ('$company')";
	$result=mysqli_query($db,$query);
	   
     if($result)
	   {
	     header("location:add_company.php?success= New company added successfully! ");   
     }

	   else
	   {
       header("location:add_company.php?invalid= Mysqli query error! company not added successfully. ");
	   }	
	}

	else
	{
		echo "<script>
       alert('Please fill the missing values');
       window.location.href='add_company.php';
       </script>";
	}	
}


//Delete Company Request//
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $delete_company_query="DELETE FROM `company` WHERE `id`='$id'";
  $delete_company_result=mysqli_query($db,$delete_company_query);
  if($delete_company_result)
   {
    header("location:manage_company.php?success= Company data is deleted successfully! ");
   }
   else
   {
    header("location:manage_company.php?invalid= Company data is not deleted successfully! "); 
   } 
 }  
//Delete company Request//

// Update company Process//
if(isset($_POST['update']))
{
  if($_POST['company']!='' )
  {
      $company=$_POST['company']; 
      $company_id=$_POST['company_id'];

      $query="UPDATE `company` SET `company`='$company' WHERE `id`='$company_id'";
      $result=mysqli_query($db,$query);
         if($result)
         {
        header("location:manage_company.php?success= Company data is updated successfully! ");
         }
         else
         {
        header("location:manage_company.php?invalid= Company data is not updated successfully! "); 
         } 
  }
} 
// End update company Process//



?>