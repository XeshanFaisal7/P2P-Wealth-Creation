<?php
include ('header.php');

//individual health insurance data//
$individual_query="SELECT `health`.id,`health`.category,`health`.self_dob,`health`.self_ped,`health`.sum_insured,`health`.status, `customer`.full_name FROM `health` INNER JOIN `customer` ON `health`.customer_id = `customer`.id AND `health`.category='Individual'";

$individual_result=mysqli_query($db,$individual_query);
$individual_count=mysqli_num_rows($individual_result);
//individual health insurance data//

//family health insurance data//
$family_query="SELECT `health`.id,`health`.category,`health`.self_dob,`health`.self_ped,`health`.spouse_dob,`health`.spouse_ped,`health`.child_1_dob,`health`.child_1_ped,`health`.child_2_dob,`health`.child_2_ped,`health`.sum_insured,`health`.status, `customer`.full_name FROM `health` INNER JOIN `customer` ON `health`.customer_id = `customer`.id AND `health`.category='Family'";
$family_result=mysqli_query($db,$family_query);
$family_count=mysqli_num_rows($family_result);
//family health insurance data//

//term life insurance data//
$term_query="SELECT `life_insurance`.id,`life_insurance`.category,`life_insurance`.name,`life_insurance`.dob,`life_insurance`.gender,`life_insurance`.annual_income,`life_insurance`.sum_assured,`life_insurance`.policy_term,`life_insurance`.occupation,`customer`.full_name FROM `life_insurance` INNER JOIN `customer` ON `life_insurance`.customer_id = `customer`.id AND `life_insurance`.category='Term'";
$term_result=mysqli_query($db,$term_query);
$term_count=mysqli_num_rows($term_result);
//term life insurance data//

//Saving/Investment life insurance data//
$saving_query="SELECT `life_insurance`.id,`life_insurance`.category,`life_insurance`.name,`life_insurance`.dob,`life_insurance`.gender,`life_insurance`.frequency,`life_insurance`.policy_term,`life_insurance`.occupation,`customer`.full_name FROM `life_insurance` INNER JOIN `customer` ON `life_insurance`.customer_id = `customer`.id AND (`life_insurance`.category='Saving' OR `life_insurance`.category='Investment')";
$saving_result=mysqli_query($db,$saving_query);
$saving_count=mysqli_num_rows($saving_result);
//Saving/Investment life insurance data//

//mutual fund data//
$mutual_fund_query="SELECT `mutual_fund`.id,`mutual_fund`.name,`mutual_fund`.dob,`mutual_fund`.pan_no,`mutual_fund`.existing_demat,`mutual_fund`.type_of_investment,`mutual_fund`.mode_of_investment,`mutual_fund`.status,`customer`.full_name FROM `mutual_fund` INNER JOIN `customer` ON `mutual_fund`.customer_id = `customer`.id ";
$mutual_fund_result=mysqli_query($db,$mutual_fund_query);
$mutual_fund_count=mysqli_num_rows($mutual_fund_result);
//mutual fund data//




?>
<title>Customer Queries</title>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="font-size: 24px">Health Insurance (SELF)</h4>
                  <p class="card-description">
                    Manage <code>Queries</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th style="color: black"><b>S No.</b></th>
                          <th style="color: black"><b>Customer Name</b></th>
                          <th style="color: black"><b>Category</b></th>
                          <th style="color: black"><b>Date Of Birth</b></th>
                          <th style="color: black"><b>PED</b></th>
                          <th style="color: black"><b>Sum Insured</b></th>
                          <th style="color: black"><b>Status</b></th>
                          <th style="color: black"><b>Action</b></th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                      $i=1;
                      if($individual_count>0)
                      {    
                       while($individual_row=mysqli_fetch_assoc($individual_result))
                       {
                      ?>
                      <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $individual_row['full_name']; ?></td>
                      <td><?php echo $individual_row['category']; ?></td>
                      <td><?php echo $individual_row['self_dob']; ?></td>
                      <td><?php echo $individual_row['self_ped']; ?></td>
                      <td><?php echo $individual_row['sum_insured']; ?></td>
                      <td><label class="badge badge-info"> <?php echo $individual_row['status']; ?></label></td>                       
                       <td>
                       <a href="add_quote.php?query_id=<?php echo $individual_row['id']; ?>&category=<?php echo $individual_row['category']; ?>">
                        <label class="badge badge-warning" style="color: white">Add Quotes</label>
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
                        <tr>
                        <td style="color: red">*</td>
                        <td style="color: red">*</td>
                        <td style="color: red">No</td>
                        <td style="color: red">Data</td>
                        <td style="color: red">Found</td>
                        <td style="color: red">*</td>
                        <td style="color: red">*</td>
                        <td style="color: red">*</td>
                        </tr>
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