<?php

include ('header.php');
if(isset($_GET['query_id']) && isset($_GET['category']))
{
$query_id=$_GET['query_id'];
$category=$_GET['category'];

if($category=='Individual')
 {
    $individual_query="SELECT `health`.id,`health`.category,`health`.self_dob,`health`.self_ped,`health`.sum_insured,`health`.status, `customer`.full_name FROM `health` INNER JOIN `customer` ON `health`.customer_id = `customer`.id AND (`health`.category='Individual' AND `health`.id='$query_id')";
    $individual_result=mysqli_query($db,$individual_query);
    $individual_row=mysqli_fetch_assoc($individual_result);

 }
 
   $plan_query="SELECT * FROM `plan` WHERE `product`='$category'";
   $plan_result=mysqli_query($db,$plan_query);
   $plan_count=mysqli_num_rows($plan_result);
}
?>
<title>Add Quote</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="font-size: 24px">HEALTH INSURANCE(SELF) QUERY</h4>
                  <p class="card-description">
                  <span><code>Details Of the Customer Query</code></span>
                  </p>
                  <?php if($category=='Individual')
                  {
                    ?>
                  <div class="table-responsive">
                   <p class="card-description">
                     <span style="font-size: 16px"><b>Customer Name : </b><?php echo $individual_row['full_name'];?></span>
                    <br> 
                  <span style="font-size: 16px"><b>Category : </b><?php echo $individual_row['category'];?></span>
                  <br>
                   <span style="font-size: 16px"><b>Date Of Birth : </b><?php echo $individual_row['self_dob'];?></span>
                    <br>
                    <span style="font-size: 16px"><b>Pre Existing (PED) : </b><?php echo $individual_row['self_ped'];?></span>
                     <br>
                     <span style="font-size: 16px"><b>Sum Insured : </b><?php echo $individual_row['sum_insured'];?></span>
                  
                  </p>
                  </div>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>HEALTH INSURANCE</strong>
                                 
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="category" class=" form-control-label"><b>CATEGORY</b></label>
                                            <select id="category" name="category" class="form-control">
                                            <option value="Individual">Individual</option>
                                            <option value="Family">Family</option>    
                                            </select>

                                        </div>
                                        <div class="form-group">
                                          <label for="description" class=" form-control-label"><b>CATEGORY</b></label>
                                         <textarea id="editor"></textarea> 
                                          
                                        </div>
                                       
                                           <br>

                                          <button type="submit" class="btn btn-primary" name="health">Submit</button>
                                    </div>
                                </div>
                            </div>

         </div>
        </div>

            
        <!-- content-wrapper ends -->

 <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
<script>
      tinymce.init({
       selector: 'textarea#editor', });
</script>       

<?php
include('footer.php');
?>