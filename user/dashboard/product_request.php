<?php
include('../../database/db_connect.php');
//Add Health Product Process//
session_start();

if (isset($_POST['health'])) 
{
  if($_POST['category']=='Individual')
  {

     if(empty($_POST['self_dob']) || empty($_POST['self_ped']) || empty($_POST['sum_insured']))
     {
     header("location:health.php?missing= Fields are missing! Please fill them.");  
     } 

     else
     {
      $category=$_POST['category'];
      $self_dob=$_POST['self_dob'];
      $self_ped=$_POST['self_ped'];
      $sum_insured=$_POST['sum_insured'];
      $third_quote=$_POST['third_quote'];
      $status='Initiated';
      $customer_id=$_SESSION['customer_id'];

      $query="INSERT INTO `health`(`category`, `self_dob`, `self_ped`, `sum_insured`,`third_quote`,`status`,`customer_id`) VALUES ('$category','$self_dob','$self_ped','$sum_insured','$third_quote','$status','$customer_id')";

      $result=mysqli_query($db,$query);
      if($result)
      {
       header("location:index.php?success= Health Insurance query has got registered successfully!");
      }
      else
      {
      header("location:health.php?invalid= Mysqli Query Error! Please Try Again");
      }  
      
     } 

  }
 
  else if($_POST['category']=='Family')
  {

     if(empty($_POST['self_dob']) || empty($_POST['self_ped']) || empty($_POST['spouse_dob']) || empty($_POST['spouse_ped']) || empty($_POST['child_1_dob']) || empty($_POST['child_1_ped']) || empty($_POST['child_2_dob']) || empty($_POST['child_2_ped'])  || empty($_POST['sum_insured']))
     {
     header("location:health.php?missing= Fields are missing! Please fill them.");  
     } 

     else
     {
       $category=$_POST['category'];
      $self_dob=$_POST['self_dob'];
      $self_ped=$_POST['self_ped'];
      $spouse_dob=$_POST['spouse_dob'];
      $spouse_ped=$_POST['spouse_ped'];
      $child_1_dob=$_POST['child_1_dob'];
      $child_1_ped=$_POST['child_1_ped'];
      $child_2_dob=$_POST['child_2_dob'];
      $child_2_ped=$_POST['child_2_ped'];
      $sum_insured=$_POST['sum_insured'];
      $third_quote=$_POST['third_quote'];
       $status='Initiated';
       $customer_id=$_SESSION['customer_id'];
      $query="INSERT INTO `health`(`category`, `self_dob`, `self_ped`, `spouse_dob`, `spouse_ped`, `child_1_dob`, `child_1_ped`, `child_2_dob`, `child_2_ped`, `sum_insured`,`third_quote`,`status`,`customer_id`) VALUES ('$category','$self_dob','$self_ped','$spouse_dob','$spouse_ped','$child_1_dob','$child_1_ped','$child_2_dob','$child_2_ped','$sum_insured','$third_quote','$status','$customer_id')";
      $result=mysqli_query($db,$query);
      if($result)
      {
       header("location:index.php?success= Health Insurance query has got registered successfully!");
      }
      else
      {
      header("location:health.php?invalid= Mysqli Query Error! Please Try Again");
      }  
     } 

  }  
  
}
//Add Health Product Process//

//Delete Health Product Process//

if(isset($_GET['delete_id']))
{
  $delete_id=$_GET['delete_id'];
  $customer_id=$_SESSION['customer_id'];
  $delete_health_query="DELETE FROM `health` WHERE `id`='$delete_id' AND `customer_id`='$customer_id'";
  $delete_health_result=mysqli_query($db,$delete_health_query);
  if($delete_health_result)
  {
    header("location:insurance_queries.php?success= Record is deleted successfully! ");
  }
  else
  {
      header("location:insurance_queries.php?invalid= Record is not deleted successfully! ");
  }  
  
}

//Delete Health Product Process//



//update Health Product Process//

if (isset($_POST['update_health'])) 
{
  if($_POST['category']=='Individual')
  {

     if(empty($_POST['self_dob']) || empty($_POST['self_ped']) || empty($_POST['sum_insured']))
     {
     header("location:update_health.php?id=".$_POST['id']."&category=".$_POST['category']."");  
     } 

     else
     {
      $id=$_POST['id'];
      $category=$_POST['category'];
      $self_dob=$_POST['self_dob'];
      $self_ped=$_POST['self_ped'];
      $sum_insured=$_POST['sum_insured'];
      $third_quote=$_POST['third_quote'];
      $status='Initiated';
      $customer_id=$_SESSION['customer_id'];
      $query="UPDATE `health` SET `self_dob`='$self_dob',`self_ped`='$self_ped',`sum_insured`='$sum_insured',`third_quote`='$third_quote' WHERE `id`='$id' AND `category`='$category' AND `customer_id`='$customer_id' ";

      $result=mysqli_query($db,$query);
        if($result)
        {
          header("location:insurance_queries.php?success= Health Insurance query has got updated successfully!");
        }
        else
        {
           header("location:insurance_queries.php?invalid= Health Insurance query has not updated successfully!");
        }  
     } 

  }
 
  else if($_POST['category']=='Family')
  {

     if(empty($_POST['self_dob']) || empty($_POST['self_ped']) || empty($_POST['spouse_dob']) || empty($_POST['spouse_ped']) || empty($_POST['child_1_dob']) || empty($_POST['child_1_ped']) || empty($_POST['child_2_dob']) || empty($_POST['child_2_ped'])  || empty($_POST['sum_insured']))
     {
     header("location:update_health.php?id=".$_POST['id']."&category=".$_POST['category']."");
     } 

     else
     {
       $id=$_POST['id'];
       $category=$_POST['category'];
      $self_dob=$_POST['self_dob'];
      $self_ped=$_POST['self_ped'];
      $spouse_dob=$_POST['spouse_dob'];
      $spouse_ped=$_POST['spouse_ped'];
      $child_1_dob=$_POST['child_1_dob'];
      $child_1_ped=$_POST['child_1_ped'];
      $child_2_dob=$_POST['child_2_dob'];
      $child_2_ped=$_POST['child_2_ped'];
      $sum_insured=$_POST['sum_insured'];
      $third_quote=$_POST['third_quote'];
       $status='Initiated';
       $customer_id=$_SESSION['customer_id'];
      $query="UPDATE `health` SET `self_dob`='$self_dob',`self_ped`='$self_ped',`spouse_dob`='$spouse_dob',`spouse_ped`='$spouse_ped',`child_1_dob`='$child_1_dob',`child_1_ped`='$child_1_ped',`child_2_dob`='$child_2_dob',`child_2_ped`='$child_2_ped',`sum_insured`='$sum_insured',`third_quote`='$third_quote' WHERE `id`='$id' AND `category`='$category' AND `customer_id`='$customer_id'";
      $result=mysqli_query($db,$query);
      if($result)
        {
          header("location:insurance_queries.php?success= Health Insurance query has got updated successfully!");
        }
        else
        {
           header("location:insurance_queries.php?invalid= Health Insurance query has not updated successfully!");
        }  
     } 

  }  
  
}
//Update Health Product Process//



//Add Life Insurance Product Process//

if (isset($_POST['life'])) 
{
  if($_POST['category']=='Term')
  {

     if(empty($_POST['name']) || empty($_POST['dob']) || empty($_POST['gender']) || empty($_POST['annual_income']) || empty($_POST['sum_assured']) || empty($_POST['policy_term']) || empty($_POST['occupation']))
     {
     header("location:life_insurance.php?missing= Fields are missing! Please fill them.");  
     } 

     else
     {
      $category=$_POST['category'];
      $name=$_POST['name'];
      $dob=$_POST['dob'];
      $gender=$_POST['gender'];
      $annual_income=$_POST['annual_income'];
      $sum_assured=$_POST['sum_assured'];
      $policy_term=$_POST['policy_term'];
      $occupation=$_POST['occupation'];
      $third_quote=$_POST['third_quote'];
      $status='Initiated';
      $customer_id=$_SESSION['customer_id'];
      $query="INSERT INTO `life_insurance`(`category`,`name`, `dob`, `gender`, `annual_income`, `sum_assured`, `policy_term`, `occupation`, `third_quote`, `status`,`customer_id`) VALUES ('$category','$name','$dob','$gender','$annual_income','$sum_assured','$policy_term','$occupation','$third_quote','$status','$customer_id')";
  
      $result=mysqli_query($db,$query);
       if($result)
        {
          header("location:index.php?success= Life Insurance query has got registered successfully!");
        }
        else
        {
           header("location:life_insurance.php?invalid= Mysqli query error! Please Try Again");
        }  
      
     } 

  }
 
  else if($_POST['category']=='Saving' || $_POST['category']=='Investment')
  {

     if(empty($_POST['name']) || empty($_POST['dob']) || empty($_POST['gender']) || empty($_POST['frequency']) || empty($_POST['policy_term']) || empty($_POST['occupation']))
     {
      header("location:life_insurance.php?missing= Fields are missing! Please fill them.");  
     } 

     else
     {
      $category=$_POST['category'];
      $name=$_POST['name'];
      $dob=$_POST['dob'];
      $gender=$_POST['gender'];
      $frequency=$_POST['frequency'];
      $policy_term=$_POST['policy_term'];
      $occupation=$_POST['occupation'];
      $third_quote=$_POST['third_quote'];
      $status='Initiated';
      $customer_id=$_SESSION['customer_id'];
        $query="INSERT INTO `life_insurance`(`category`,`name`, `dob`, `gender`, `frequency`, `policy_term`, `occupation`, `third_quote`, `status`,`customer_id`) VALUES ('$category','$name','$dob','$gender','$frequency','$policy_term','$occupation','$third_quote','$status','$customer_id')";

      $result=mysqli_query($db,$query);
      if($result)
        {
          header("location:index.php?success= Life Insurance query has got registered successfully!");
        }
        else
        {
           header("location:life_insurance.php?invalid= Mysqli query error! Please Try Again");
        }  
     } 

  }  
  
}
//Add Life Insurance Product Process//



//Delete Life  Product Process//

if(isset($_GET['life_delete_id']))
{
  $delete_id=$_GET['life_delete_id'];
  $customer_id=$_SESSION['customer_id'];
  $delete_life_query="DELETE FROM `life_insurance` WHERE `id`='$delete_id' AND `customer_id`='$customer_id'";
  $delete_life_result=mysqli_query($db,$delete_life_query);
  if($delete_life_result)
  {
    header("location:insurance_queries.php?success= Record is deleted successfully! ");
  }
  else
  {
      header("location:insurance_queries.php?invalid= Record is not deleted successfully! ");
  }  
  
}

//Delete Life Product Process//


//Update Life Insurance Product Process//

if (isset($_POST['update_life'])) 
{
  if($_POST['category']=='Term')
  {

     if(empty($_POST['name']) || empty($_POST['dob']) || empty($_POST['gender']) || empty($_POST['annual_income']) || empty($_POST['sum_assured']) || empty($_POST['policy_term']) || empty($_POST['occupation']))
     {
     header("location:update_life_insurance.php?id=".$_POST['id']."&category=".$_POST['category']."");  
     } 

     else
     {
      $id=$_POST['id'];
      $category=$_POST['category'];
      $name=$_POST['name'];
      $dob=$_POST['dob'];
      $gender=$_POST['gender'];
      $annual_income=$_POST['annual_income'];
      $sum_assured=$_POST['sum_assured'];
      $policy_term=$_POST['policy_term'];
      $occupation=$_POST['occupation'];
      $third_quote=$_POST['third_quote'];
      $customer_id=$_SESSION['customer_id'];

      $query="UPDATE `life_insurance` SET `category`='$category',`name`='$name',`dob`='$dob',`gender`='$gender',`annual_income`='$annual_income',`sum_assured`='$sum_assured',`policy_term`='$policy_term',`occupation`='$occupation',`third_quote`='$third_quote' WHERE `customer_id`='$customer_id' AND `id`='$id' AND `category`='$category'";
  
      $result=mysqli_query($db,$query);
       if($result)
        {
          header("location:insurance_queries.php?success= Life Insurance query has got updated successfully!");
        }
        else
        {
           header("location:update_life_insurance.php?invalid= Mysqli query error! Please Try Again");
        }  
      
     } 

  }
 
  else if($_POST['category']=='Saving' || $_POST['category']=='Investment')
  {

     if(empty($_POST['name']) || empty($_POST['dob']) || empty($_POST['gender']) || empty($_POST['frequency']) || empty($_POST['policy_term']) || empty($_POST['occupation']))
     {
      header("location:update_life_insurance.php?id=".$_POST['id']."&category=".$_POST['category']."");   
     } 

     else
     {
      $id=$_POST['id'];
      $category=$_POST['category'];
      $name=$_POST['name'];
      $dob=$_POST['dob'];
      $gender=$_POST['gender'];
      $frequency=$_POST['frequency'];
      $policy_term=$_POST['policy_term'];
      $occupation=$_POST['occupation'];
      $third_quote=$_POST['third_quote'];
      $status='Initiated';
      $customer_id=$_SESSION['customer_id'];

       $query="UPDATE `life_insurance` SET `category`='$category',`name`='$name',`dob`='$dob',`gender`='$gender',`frequency`='$frequency',`policy_term`='$policy_term',`occupation`='$occupation',`third_quote`='$third_quote' WHERE `customer_id`='$customer_id' AND `id`='$id' AND `category`='$category'";
      $result=mysqli_query($db,$query);
      if($result)
        {
          header("location:index.php?success= Life Insurance query has got registered successfully!");
        }
        else
        {

           header("location:insurance_queries.php?invalid= Mysqli query error! Please Try Again");
        }  
     } 

  }  
  
}
//Update Life Insurance Product Process//


//Add Mutual Fund Product Process//

if (isset($_POST['mutual_fund'])) 
{

  if(empty($_POST['name']) || empty($_POST['dob']) || empty($_POST['pan_no']) || empty($_POST['existing_demat']) || empty($_POST['type_of_investment']) || empty($_POST['mode_of_investment']))
     {
      header("location:mutual_fund.php?missing= Fields are missing! Please fill them.");  
     } 

     else
     { 

      $name=$_POST['name'];
      $dob=$_POST['dob'];
      $pan_no=$_POST['pan_no'];
      $existing_demat=$_POST['existing_demat'];
      $type_of_investment=$_POST['type_of_investment'];
      $mode_of_investment=$_POST['mode_of_investment'];
      $third_quote=$_POST['third_quote'];
      $status='Initiated';
      $customer_id=$_SESSION['customer_id'];

      $query="INSERT INTO `mutual_fund`(`name`, `dob`, `pan_no`, `existing_demat`, `type_of_investment`, `mode_of_investment`,`third_quote`,`status`, `customer_id`) VALUES ('$name','$dob','$pan_no','$existing_demat','$type_of_investment','$mode_of_investment','$third_quote','$status','$customer_id')";
  
      $result=mysqli_query($db,$query);
       if($result)
        {
          header("location:index.php?success= Mutual Funds query has got registered successfully!");
        }
        else
        {
           header("location:mutual_fund.php?invalid= Mysqli query error! Please Try Again");
        }  
     } 
} 

 
//Add Mutual Fund Product Process//

//Delete Mutual Fund  Product Process//

if(isset($_GET['mutual_delete_id']))
{
  $delete_id=$_GET['mutual_delete_id'];
  $customer_id=$_SESSION['customer_id'];
  $delete_life_query="DELETE FROM `mutual_fund` WHERE `id`='$delete_id' AND `customer_id`='$customer_id'";
  $delete_life_result=mysqli_query($db,$delete_life_query);
  if($delete_life_result)
  {
    header("location:insurance_queries.php?success= Record is deleted successfully! ");
  }
  else
  {
      header("location:insurance_queries.php?invalid= Record is not deleted successfully! ");
  }  
  
}

//Delete Mutual Fund Product Process//


//Add Mutual Fund Product Process//

if (isset($_POST['update_mutual_fund'])) 
{

      $id=$_POST['id'];
       $name=$_POST['name'];
      $dob=$_POST['dob'];
      $pan_no=$_POST['pan_no'];
      $existing_demat=$_POST['existing_demat'];
      $type_of_investment=$_POST['type_of_investment'];
      $mode_of_investment=$_POST['mode_of_investment'];
      $third_quote=$_POST['third_quote'];
      $customer_id=$_SESSION['customer_id'];
      
      $query="UPDATE `mutual_fund` SET `name`='$name',`dob`='$dob',`pan_no`='$pan_no',`existing_demat`='$existing_demat',`type_of_investment`='$type_of_investment',`mode_of_investment`='$mode_of_investment',`third_quote`='$third_quote' WHERE `id`='$id' AND `customer_id`='$customer_id'";
  
      $result=mysqli_query($db,$query);
       if($result)
        {
          header("location:insurance_queries.php?success= Mutual Funds query has got updated successfully!");
        }
        else
        {
           header("location:insurance_queries.php?invalid= Mysqli query error! Please Try Again");
        }  
      
} 

 
//Add Mutual Fund Product Process//

//Add Vehicle Insurance Product Process//

if (isset($_POST['vehicle'])) 
{

    if(empty($_POST['name']) || empty($_POST['type_of_vehicle']) || empty($_POST['vehicle_number']) || empty($_POST['registration_date']) || empty($_POST['company_name']) || empty($_POST['model']) || empty($_POST['model']) || empty($_POST['variant']) || empty($_POST['existing_insurer']) || empty($_POST['policy_expiry_date']) || empty($_POST['existing_claims']) || empty($_POST['ncb']))
     {
      header("location:life_insurance.php?missing= Fields are missing! Please fill them.");  
     } 

     else
     { 

      // get details of the uploaded image //
    $imageTmpPath = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    $imageSize = $_FILES['image']['size'];
    $imageType = $_FILES['image']['type'];
    $imageNameCmps = explode(".", $imageName);
    $imageExtension = strtolower(end($imageNameCmps));
     //end  get details of the uploaded image //

    // get details of the uploaded rc_copy //
    $rc_copyTmpPath = $_FILES['rc_copy']['tmp_name'];
    $rc_copyName = $_FILES['rc_copy']['name'];
    $rc_copySize = $_FILES['rc_copy']['size'];
    $rc_copyType = $_FILES['rc_copy']['type'];
    $rc_copyNameCmps = explode(".", $rc_copyName);
    $rc_copyExtension = strtolower(end($rc_copyNameCmps));
     //end  get details of the uploaded rc_copy //

    // get details of the uploaded existing_policy //
    $existing_policyTmpPath = $_FILES['existing_policy']['tmp_name'];
    $existing_policyName = $_FILES['existing_policy']['name'];
    $existing_policySize = $_FILES['existing_policy']['size'];
    $existing_policyType = $_FILES['existing_policy']['type'];
    $existing_policyNameCmps = explode(".", $existing_policyName);
    $existing_policyExtension = strtolower(end($existing_policyNameCmps));
     //end  get details of the uploaded rc_copy //

    $new_imageName = md5(time() . $imageName) . '.' . $imageExtension;
    $new_rc_copyName = md5(time() . $rc_copyName) . '.' . $rc_copyExtension;
    $new_existing_policyName = md5(time() . $existing_policyName) . '.' . $existing_policyExtension;

    $allowedfileExtensions = array('jpg', 'jpeg', 'pdf');

      if (in_array($imageExtension, $allowedfileExtensions) && in_array($rc_copyExtension, $allowedfileExtensions)  && in_array($existing_policyExtension, $allowedfileExtensions))
       {
      $upload_imageDir = '../../files/user/Image/';
      $upload_rc_copyDir = '../../files/user/RC Copy/';
      $upload_existing_policyDir = '../../files/user/Existing Policy/';
      $image_dest_path = $upload_imageDir . $new_imageName;
      $rc_copy_dest_path = $upload_rc_copyDir . $new_rc_copyName;
      $existing_policy_dest_path = $upload_existing_policyDir . $new_existing_policyName;

           if(move_uploaded_file($imageTmpPath, $image_dest_path) && move_uploaded_file($rc_copyTmpPath, $rc_copy_dest_path)  && move_uploaded_file($existing_policyTmpPath, $existing_policy_dest_path)) 
          {

               $name=$_POST['name'];
               $type_of_vehicle=$_POST['type_of_vehicle'];
               $vehicle_number=$_POST['vehicle_number'];
               $registration_date=$_POST['registration_date'];
               $company_name=$_POST['company_name'];
               $model=$_POST['model'];
               $variant=$_POST['variant'];
               $existing_insurer=$_POST['existing_insurer'];
               $policy_expiry_date=$_POST['policy_expiry_date'];
               $existing_claims=$_POST['existing_claims'];
               $ncb=$_POST['ncb'];
               $status='Initiated';
               $third_quote=$_POST['third_quote'];
               $customer_id=$_SESSION['customer_id'];

             $query="INSERT INTO `vehicle_insurance`(`name`, `type_of_vehicle`, `vehicle_number`, `registration_date`, `company_name`, `model`, `variant`, `existing_insurer`, `policy_expiry_date`, `existing_claims`, `ncb`, `image_path`, `rc_copy_path`, `existing_policy_path`, `third_quote`, `status`, `customer_id`) VALUES ('$name','$type_of_vehicle','$vehicle_number','$registration_date','$company_name','$model','$variant','$existing_insurer','$policy_expiry_date','$existing_claims','$ncb','$new_imageName','$new_rc_copyName','$new_existing_policyName','$third_quote','$status','$customer_id')";

                  $result=mysqli_query($db,$query);
                 if($result)
                  {
                    header("location:index.php?success= Vehicle Insurance has got registered successfully!");
                  }
                  else
                  {
                      header("location:vehicle_insurance.php?invalid= Mysqli Query Error  ! Please Try Again"); 
                  }  

         
          }  

          else
          {
           header("location:vehicle_insurance.php?invalid= File Not Uploaded ! Please Try Again"); 
          }  

      



        }  
      


      
     } 
} 

 
//Add Vehicle Insurance Product Process//


//Delete Vehicle Insurance  Product Process//

if(isset($_GET['vehicle_delete_id']))
{
  $delete_id=$_GET['vehicle_delete_id'];
  $customer_id=$_SESSION['customer_id'];
  $delete_life_query="DELETE FROM `vehicle_insurance` WHERE `id`='$delete_id' AND `customer_id`='$customer_id'";
  $delete_life_result=mysqli_query($db,$delete_life_query);
  if($delete_life_result)
  {
    header("location:insurance_queries.php?success= Record is deleted successfully! ");
  }
  else
  {
      header("location:insurance_queries.php?invalid= Record is not deleted successfully! ");
  }  
  
}

//Delete Vehicle Insurance Product Process//

?>