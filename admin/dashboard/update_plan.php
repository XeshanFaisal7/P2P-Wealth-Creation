<?php
include('header.php');
if(isset($_GET['id']))
{
  $plan_id=$_GET['id'];
  $get_plan_data_query="SELECT * FROM `plan` WHERE `id`='$plan_id'";
 
  $get_plan_result=mysqli_query($db,$get_plan_data_query);
  $row=mysqli_fetch_assoc($get_plan_result);
}
?>
<title>Update plan</title>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Plan</h4>
                  <p class="card-description">
                    modify fields in the form to update plan
                  </p>
                  
                  <form class="forms-sample" method="post" id="myForm" action="plan_request.php" enctype="multipart/form-data" onsubmit="return form_validation()">
                    <input type="hidden" name="plan_id" value="<?php echo $plan_id; ?>" >
                    
                    <div class="form-group">
                      <label for="plan">Product</label>
                      <select type="text" class="form-control" id="product" name="product">
                       <?php
                       $product=$row['product'];
                       if($product=='Term')
                       {     
                       ?>
                       <option value="Term">Term Life Insurance</option> 
                       <option value="Saving">Saving Life Insurance</option>
                       <option value="Investment">Investment Life Insurance</option> 
                       <option value="Individual">Health Insurance (SELF)</option>
                       <option value="Family">Health Insurance (FAMILY)</option>
                       <option value="Vehicle">Vehicle Insurance</option>
                       <option value="Mutual Fund">Mutual Funds</option>
                       <?php
                       }
                       elseif($product=='Saving')
                       {
                       ?>

                        
                       <option value="Saving">Saving Life Insurance</option>
                       <option value="Investment">Investment Life Insurance</option> 
                       <option value="Individual">Health Insurance (SELF)</option>
                       <option value="Family">Health Insurance (FAMILY)</option>
                       <option value="Vehicle">Vehicle Insurance</option>
                       <option value="Mutual Fund">Mutual Funds</option>
                       <option value="Term">Term Life Insurance</option> 
                       <?php 
                       }
                       elseif($product=='Individual')
                       {
                       ?>

                       <option value="Individual">Health Insurance (SELF)</option>
                       <option value="Family">Health Insurance (FAMILY)</option>
                       <option value="Vehicle">Vehicle Insurance</option>
                       <option value="Mutual Fund">Mutual Funds</option>
                       <option value="Term">Term Life Insurance</option>
                       <option value="Saving">Saving Life Insurance</option>
                       <option value="Investment">Investment Life Insurance</option>  
                       <?php 
                       }
                       elseif($product=='Family')
                       {
                       ?>
                       
                       <option value="Family">Health Insurance (FAMILY)</option>
                       <option value="Vehicle">Vehicle Insurance</option>
                       <option value="Mutual Fund">Mutual Funds</option>
                       <option value="Term">Term Life Insurance</option>
                       <option value="Saving">Saving Life Insurance</option>
                       <option value="Investment">Investment Life Insurance</option>
                       <option value="Individual">Health Insurance (SELF)</option> 

                       <?php 
                       }
                       elseif($product=='Vehicle')
                       {
                       ?>
                      
                       <option value="Vehicle">Vehicle Insurance</option>
                       <option value="Mutual Fund">Mutual Funds</option>
                       <option value="Term">Term Life Insurance</option>
                       <option value="Saving">Saving Life Insurance</option>
                       <option value="Investment">Investment Life Insurance</option>
                       <option value="Individual">Health Insurance (SELF)</option> 
                        <option value="Family">Health Insurance (FAMILY)</option>
                       
                       <?php 
                       }
                       elseif($product=='Mutual Fund')
                       {
                       ?>
                      
                       
                       <option value="Mutual Fund">Mutual Funds</option>
                       <option value="Term">Term Life Insurance</option>
                       <option value="Saving">Saving Life Insurance</option>
                       <option value="Investment">Investment Life Insurance</option>
                       <option value="Individual">Health Insurance (SELF)</option> 
                        <option value="Family">Health Insurance (FAMILY)</option>
                        <option value="Vehicle">Vehicle Insurance</option>
                       <?php 
                       }
                       ?>
                       </select> 
                      <small style="margin-top: 5px ; color: red ; font-weight : bold" id="plan_error"></small>
                    </div>

                    <div class="form-group">
                      <label for="plan_category">Plan Category</label>
                      <input type="text" class="form-control" id="plan_category" value="<?php echo $row['plan_category']; ?>" name="plan_category" placeholder="Enter Plan Category">
                      <small style="margin-top: 5px ; color: red ; font-weight : bold" id="plan_category_error"></small>
                    </div>
                  
                    <button type="submit" name="update" class="btn btn-primary mr-2">Update</button>
                 
                  </form>
                </div>
              </div>
            </div>

        </div>
       </div>    
<?php
include('footer.php');
?>
<script type="text/javascript">
   function form_validation()
  {
    var product = $('#product').val();
    var plan_category = $('#plan_category').val();
    

    if (product.length < 1) 
    {
     document.getElementById("product_error").innerHTML = "Please Select Product";
     return false;
    }
    
    if (plan_category.length < 1) 
    {
     document.getElementById("plan_category_error").innerHTML = "Please Enter Plan Category";
     return false;
    }
  }

  function reset_form()
  {
    document.getElementById("myForm").reset();

  }

</script>        
