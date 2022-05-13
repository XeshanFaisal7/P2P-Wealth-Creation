<?php
include('header.php');
$company="SELECT * FROM `company`";
$company_result=mysqli_query($db,$company);
$rows=mysqli_num_rows($company_result);
?>
<title>Manage Company</title>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Companies</h4>
                
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
                          <th>Company</th>
                          <th>Action</th> 
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if($rows>0)
                      {  
                        $i=1;
                        while($row=mysqli_fetch_assoc($company_result))
                        {  
                        ?>
                        <tr>
                          <td><?php echo $i;?></td>

                          <td><?php echo $row['company']?></td>
                           <td>
                            <a href="update_company.php?id=<?php echo $row['id']?>">
                            <label class="badge badge-info">Edit</label>
                          </a>

                           <a href="company_request.php?id=<?php echo $row['id']?>" onclick='confirm("Áre You Sure You Want To Remove This Record?")'>
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
