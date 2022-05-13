<?php
include('header.php');
$deactive_customer="SELECT * FROM `customer` WHERE `status`='inactive'";
$deactive_result=mysqli_query($db,$deactive_customer);
$rows=mysqli_num_rows($deactive_result);
?>
<title>De-Active Customers</title>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">De-Active Customers</h4>
                  <p class="card-description">
                    Existing customer deactivated by the admin
                  </p>
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
                          <th>Name</th>
                          <th>Age</th>
                          <th>Gender</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Contact No</th>
                          <th>Address</th>
                          <th>Status</th> 
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if($rows>0)
                      {  
                        $i=1;
                        while($row=mysqli_fetch_assoc($deactive_result))
                        {  
                        ?>
                        <tr>
                          <td><?php echo $i;?></td>

                          <td><?php echo $row['full_name']?></td>
                          <td><?php echo $row['age']?></td>
                          <td><?php echo $row['gender']?></td>
                          <td><?php echo $row['email']?></td>
                          <td><?php echo $row['password']?></td>
                          <td><?php echo $row['phone']?></td>
                          <td><?php echo $row['address']?></td>
                          <td onclick="change_status(<?php echo $row['id']?>)"><label class="badge badge-danger"><?php echo $row['status'];?></label></td>
                         <td>
                            <a href="update_customer.php?id=<?php echo $row['id']?>&status=<?php echo $row['status']?>">
                            <label class="badge badge-info">Edit</label>
                          </a>

                           <a href="customer_request.php?id=<?php echo $row['id']?>&status=<?php echo $row['status']?>" onclick='confirm("Áre You Sure You Want To Remove This Record?")'>
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
                          <td></td>
                          <td>*</td>
                          <td>-</td>
                          <td style="color: red">No</td>
                          <td style="color: red">Data</td>
                          <td style="color: red">Record</td>
                          <td style="color: red">Found</td>
                          <td>-</td>
                          <td>*</td>
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
<script type="text/javascript">
  function change_status($id)
  {
    var customer_id=$id;
     $.ajax({
                    type: "POST",
                    url: "customer_request.php",
                    data: {
                        deactive_customer_id: customer_id
                    },
                    success: function(data) {
                       location.reload();
                    }
           });

  }
</script>


<?php
include('footer.php');
?>
