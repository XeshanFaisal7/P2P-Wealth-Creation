<?php
include('header.php');
$plan="SELECT * FROM `plan`";
$plan_result=mysqli_query($db,$plan);
$rows=mysqli_num_rows($plan_result);
?>
<title>Manage Plan</title>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Plans</h4>
                
                  <br>
                  <?php if (isset($_GET['success'])) { ?>
                        <div class="p-3 mb-2 bg-success text-white rounded form-control" style="text-align: center;"> 
                          <?php echo $_GET['success'];?>
                        </div>
                  <?php } ?>
                  <br>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Product</th>
                          <th>Plan Category</th>
                          <th>Action</th> 
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if($rows>0)
                      {  
                        $i=1;
                        while($row=mysqli_fetch_assoc($plan_result))
                        {  
                        ?>
                        <tr>
                          <td><?php echo $i;?></td>

                            <?php
                       $product=$row['product'];
                       if($product=='Term')
                       {     
                       ?>
                        <td>Term Life Insurance</td> 
                       <?php
                       }
                       elseif($product=='Saving')
                       {
                       ?>
                       <td>Saving Life Insurance</td>
            
                       <?php 
                       }
                       elseif($product=='Investment')
                       {
                       ?>
                       <td>Investment Life Insurance</td>
            
                       <?php 
                       }
                       elseif($product=='Individual')
                       {
                       ?>
                       <td>Health Insurance (SELF)</td>
                       <?php 
                       }
                       elseif($product=='Family')
                       {
                       ?>
                      <td>Health Insurance (FAMILY)</td>
                       <?php 
                       }
                       elseif($product=='Vehicle')
                       {
                       ?>
                      <td>Vehicle Insurance</td>
                       <?php 
                       }
                       elseif($product=='Mutual Fund')
                       {
                       ?>
                        <td>Mutual Funds</td>
                       <?php 
                       }
                       ?>
                          <td><?php echo $row['plan_category']?></td>
                           <td>
                            <a href="update_plan.php?id=<?php echo $row['id']?>">
                            <label class="badge badge-info">Edit</label>
                          </a>

                           <a href="plan_request.php?id=<?php echo $row['id']?>" onclick='confirm("Áre You Sure You Want To Remove This Record?")'>
                            <label class="badge badge-danger">Delete</label>
                          </a>
                         </td>
                        </tr>
                        <?php
                        $i++;
                        }
                      }
                      else
                      {
                       ?>
                         
                          <td style="color: red">No</td>
                          <td style="color: red">Data Record</td>
                          <td style="color: red">Found</td>
                          
                      <?php  
                      }  
                      ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <!-- content-wrapper ends -->


<?php
include('footer.php');
?>
