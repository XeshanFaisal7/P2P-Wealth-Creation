<?php
include ('header.php');
$customer_id=$_SESSION['customer_id'];
//individual health insurance data//
$individual_query="SELECT * FROM `health` WHERE `category`='Individual' AND `customer_id`='customer_id'";
$individual_result=mysqli_query($db,$individual_query);
$individual_count=mysqli_num_rows($individual_result);
//individual health insurance data//

//family health insurance data//
$family_query="SELECT * FROM `health` WHERE `category`='Family' AND `customer_id`='$customer_id'";
$family_result=mysqli_query($db,$family_query);
$family_count=mysqli_num_rows($family_result);
//family health insurance data//

//term life insurance data//
$term_query="SELECT * FROM `life_insurance` WHERE `category`='Term' AND `customer_id`='$customer_id'";
$term_result=mysqli_query($db,$term_query);
$term_count=mysqli_num_rows($term_result);
//term life insurance data//

//saving life insurance data//
$saving_query="SELECT * FROM `life_insurance` WHERE (`category`='Saving' OR `category`='Investment') AND `customer_id`='$customer_id'";
$saving_result=mysqli_query($db,$saving_query);
$saving_count=mysqli_num_rows($saving_result);
//saving life insurance data//

//mutual fund data//
$mutual_fund_query="SELECT * FROM `mutual_fund` WHERE `customer_id`='$customer_id'";
$mutual_fund_result=mysqli_query($db,$mutual_fund_query);
$mutual_fund_count=mysqli_num_rows($mutual_fund_result);
//mutual fund data//

//vehicle insurance data//
$vehicle_insurance_query="SELECT * FROM `vehicle_insurance` WHERE `customer_id`='$customer_id'";
$vehicle_insurance_result=mysqli_query($db,$vehicle_insurance_query);
$vehicle_insurance_count=mysqli_num_rows($vehicle_insurance_result);
//vehicle insurance data//
?>
<title>Insurance Queries</title>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <?php if (isset($_GET['success'])) { ?>
                        <div class="p-3 mb-2 bg-success text-white rounded form-control" style="display: inline-block; text-align: center;"> <?php echo $_GET['success'];?></div>
                <?php } ?> 

                <?php if (isset($_GET['invalid'])) { ?>
                        <div class="p-3 mb-2 bg-danger text-white rounded form-control" style="display: inline-block; text-align: center;"> <?php echo $_GET['invalid'];?></div>
                <?php } ?> 
                             
                            <div class="col-lg-12">

                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <h3><a href="health.php" style="color: #FFFFFF">HEALTH INSURANCE (SELF)</a></h3>
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <th style="color: #FFFFFF">S No.</th>
                                                <th style="color: #FFFFFF">Category</th>
                                                <th style="color: #FFFFFF">Date Of Birth</th>
                                                <th style="color: #FFFFFF">PED</th>
                                                <th style="color: #FFFFFF">Sum Insured</th>
                                                <th style="color: #FFFFFF">Status</th>
                                                <th style="color: #FFFFFF">Action</th>
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
                                                <td><?php echo $individual_row['category']; ?></td>
                                                <td><?php echo $individual_row['self_dob']; ?></td>
                                                <td><?php echo $individual_row['self_ped']; ?></td>
                                                <td><?php echo $individual_row['sum_insured']; ?></td>
                                                <td>
                                                <span class="role delete" style="background-color: #5DADE2 ">
                                                    <?php echo $individual_row['status']; ?>    
                                                </span>
                                                </td>
                                                
                                                <td><a href="product_request.php?delete_id=<?php echo $individual_row['id']; ?>" onclick='return confirm("Áre You Sure You Want To Remove This Record?")'><span class="role delete">Delete</span></a>&nbsp&nbsp&nbsp<a href="update_health.php?id=<?php echo $individual_row['id']; ?>&category=<?php echo $individual_row['category']; ?>"><span class="role edit">Edit</span></a>
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
                                                <td>*</td>
                                                <td>No</td>
                                                <td>Table</td>
                                                <td>Data</td>
                                                <td>Found</td>
                                                <td>*</td>
                                                <td>*</td>
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


                            <div class="col-lg-12">

                                <div class="au-card au-card--bg-purple au-card-top-countries m-b-30" >
                                    <div class="au-card-inner">
                                        <h3><a href="health.php" style="color: #FFFFFF">HEALTH INSURANCE (FAMILY)</a></h3>
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <th style="color: #FFFFFF">S No.</th>
                                                <th style="color: #FFFFFF">Category</th>
                                                <th style="color: #FFFFFF">Self DOB</th>
                                                <th style="color: #FFFFFF">Self PED</th>
                                                <th style="color: #FFFFFF">Spouse DOB</th>
                                                <th style="color: #FFFFFF">Spouse PED</th>
                                                <th style="color: #FFFFFF">Child 1 DOB</th>
                                                <th style="color: #FFFFFF">Child 1 PED</th>
                                                <th style="color: #FFFFFF">Child 2 DOB</th>
                                                <th style="color: #FFFFFF">Child 2 PED</th>
                                                <th style="color: #FFFFFF">Sum Insured</th>
                                                <th style="color: #FFFFFF">Status</th>
                                                <th style="color: #FFFFFF">Action</th>
                                                <tbody>
                                                <?php
                                                $i=1;
                                                if($family_count>0)
                                                {    
                                                 while($family_row=mysqli_fetch_assoc($family_result))
                                                 {
                                                ?>
                                                <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $family_row['category']; ?></td>
                                                <td><?php echo $family_row['self_dob']; ?></td>
                                                <td><?php echo $family_row['self_ped']; ?></td>
                                                <td><?php echo $family_row['spouse_dob']; ?></td>
                                                <td><?php echo $family_row['spouse_ped']; ?></td>
                                                <td><?php echo $family_row['child_1_dob']; ?></td>
                                                <td><?php echo $family_row['child_1_ped']; ?></td>
                                                <td><?php echo $family_row['child_2_dob']; ?></td>
                                                <td><?php echo $family_row['child_2_ped']; ?></td>
                                                <td><?php echo $family_row['sum_insured']; ?></td>
                                                <td> <span class="role delete" style="background-color: #5DADE2 ">
                                                    <?php echo $family_row['status']; ?>    
                                                </span></td>
                                                <td><a href="product_request.php?delete_id=<?php echo $family_row['id']?>" onclick='return confirm("Áre You Sure You Want To Remove This Record?")'><span class="role delete">Delete</span></a>&nbsp&nbsp&nbsp<a href="update_health.php?id=<?php echo $family_row['id']; ?>&category=<?php echo $family_row['category']; ?>"><span class="role edit">Edit</span></a>
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
                                                <td>*</td>
                                                <td>*</td>
                                                <td>*</td>
                                                <td>*</td>
                                                <td>*</td>
                                                <td>No</td>
                                                <td>Table</td>
                                                <td>Data</td>
                                                <td>Found</td>
                                                <td>*</td>
                                                <td>*</td>
                                                <td>*</td>
                                                <td>*</td>
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


                              <div class="col-lg-12">

                                <div class="au-card au-card--bg-red au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <h3><a href="health.php" style="color: #FFFFFF">LIFE INSURANCE (TERM)</a></h3>
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <th style="color: #FFFFFF">S No.</th>
                                                <th style="color: #FFFFFF">Category</th>
                                                <th style="color: #FFFFFF">Date Of Birth</th>
                                                <th style="color: #FFFFFF">Gender</th>
                                                <th style="color: #FFFFFF">Annual Income</th>
                                                <th style="color: #FFFFFF">Sum Assured</th>
                                                <th style="color: #FFFFFF">Policy Term</th>
                                                <th style="color: #FFFFFF">Occupation</th>
                                                <th style="color: #FFFFFF">Status</th>
                                                <th style="color: #FFFFFF">Action</th>
                                                <tbody>
                                                <?php
                                                $i=1;
                                                if($term_count>0)
                                                {    
                                                 while($term_row=mysqli_fetch_assoc($term_result))
                                                 {
                                                ?>
                                                <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $term_row['category']; ?></td>
                                                <td><?php echo $term_row['dob']; ?></td>
                                                <td><?php echo $term_row['gender']; ?></td>
                                                <td><?php echo $term_row['annual_income']; ?></td>
                                                <td><?php echo $term_row['sum_assured']; ?></td>
                                                <td><?php echo $term_row['policy_term']; ?></td>
                                                <td><?php echo $term_row['occupation']; ?></td>
                                                <td>
                                                <span class="role delete" style="background-color: #5DADE2 ">
                                                    <?php echo $term_row['status']; ?>    
                                                </span>
                                                </td>
                                                
                                                <td><a href="product_request.php?life_delete_id=<?php echo $term_row['id']; ?>" onclick='return confirm("Áre You Sure You Want To Remove This Record?")'><span class="role delete">Delete</span></a>&nbsp&nbsp&nbsp<a href="update_life_insurance.php?id=<?php echo $term_row['id']; ?>&category=<?php echo $term_row['category']; ?>"><span class="role edit">Edit</span></a>
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
                                                <td>*</td>    
                                                <td>*</td>
                                                <td>No</td>
                                                <td>Table</td>
                                                <td>Data</td>
                                                <td>Found</td>
                                                <td>*</td>
                                                <td>*</td>
                                                <td>*</td>
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

                               <div class="col-lg-12">

                                <div class="au-card au-card--bg-orange au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <h3><a href="health.php" style="color: #FFFFFF">LIFE INSURANCE (SAVING/INVESTMENT)</a></h3>
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <th style="color: #FFFFFF">S No.</th>
                                                <th style="color: #FFFFFF">Category</th>
                                                <th style="color: #FFFFFF">Date Of Birth</th>
                                                <th style="color: #FFFFFF">Gender</th>
                                                <th style="color: #FFFFFF">Frequency</th>
                                                <th style="color: #FFFFFF">Policy Term</th>
                                                <th style="color: #FFFFFF">Occupation</th>

                                                <th style="color: #FFFFFF">Status</th>
                                                <th style="color: #FFFFFF">Action</th>
                                                <tbody>
                                                <?php
                                                $i=1;
                                                if($saving_count>0)
                                                {    
                                                 while($saving_row=mysqli_fetch_assoc($saving_result))
                                                 {
                                                ?>
                                                <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $saving_row['category']; ?></td>
                                                <td><?php echo $saving_row['dob']; ?></td>
                                                <td><?php echo $saving_row['gender']; ?></td>
                                                <td><?php echo $saving_row['frequency']; ?></td>
                                                <td><?php echo $saving_row['policy_term']; ?></td>
                                                <td><?php echo $saving_row['occupation']; ?></td>
                                                <td>
                                                <span class="role delete" style="background-color: #5DADE2 ">
                                                    <?php echo $saving_row['status']; ?>    
                                                </span>
                                                </td>
                                                
                                                <td><a href="product_request.php?life_delete_id=<?php echo $saving_row['id']; ?>" onclick='return confirm("Áre You Sure You Want To Remove This Record?")'><span class="role delete">Delete</span></a>&nbsp&nbsp&nbsp<a href="update_life_insurance.php?id=<?php echo $saving_row['id']; ?>&category=<?php echo $saving_row['category']; ?>"><span class="role edit">Edit</span></a>
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
                                                <td>*</td>    
                                                <td>*</td>
                                                <td>No</td>
                                                <td>Table</td>
                                                <td>Data</td>
                                                <td>Found</td>
                                                <td>*</td>
                                                <td>*</td>
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



                               <div class="col-lg-12">

                                <div class="au-card au-card--bg-green au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <h3><a href="health.php" style="color: #FFFFFF">MUTUAL FUND</a></h3>
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <th style="color: #FFFFFF">S No.</th>
                                                <th style="color: #FFFFFF">Name</th>
                                                <th style="color: #FFFFFF">Date Of Birth</th>
                                                <th style="color: #FFFFFF">Pan Number</th>
                                                <th style="color: #FFFFFF">Existing Demat</th>
                                                <th style="color: #FFFFFF">Type Of Investment</th>
                                                <th style="color: #FFFFFF">Mode Of Investment</th>

                                                <th style="color: #FFFFFF">Status</th>
                                                <th style="color: #FFFFFF">Action</th>
                                                <tbody>
                                                <?php
                                                $i=1;
                                                if($mutual_fund_count>0)
                                                {    
                                                 while($mutual_fund_row=mysqli_fetch_assoc($mutual_fund_result))
                                                 {
                                                ?>
                                                <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $mutual_fund_row['name']; ?></td>
                                                <td><?php echo $mutual_fund_row['dob']; ?></td>
                                                <td><?php echo $mutual_fund_row['pan_no']; ?></td>
                                                <td><?php echo $mutual_fund_row['existing_demat']; ?></td>
                                                <td><?php echo $mutual_fund_row['type_of_investment']; ?></td>
                                                <td><?php echo $mutual_fund_row['mode_of_investment']; ?></td>
                                                <td>
                                                <span class="role delete" style="background-color: #5DADE2 ">
                                                    <?php echo $mutual_fund_row['status']; ?>    
                                                </span>
                                                </td>
                                                
                                                <td><a href="product_request.php?mutual_delete_id=<?php echo $mutual_fund_row['id']; ?>" onclick='return confirm("Áre You Sure You Want To Remove This Record?")'><span class="role delete">Delete</span></a>&nbsp&nbsp&nbsp<a href="update_mutual_fund.php?id=<?php echo $mutual_fund_row['id']; ?>"><span class="role edit">Edit</span></a>
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
                                                <td>*</td>    
                                                <td>*</td>
                                                <td>No</td>
                                                <td>Table</td>
                                                <td>Data</td>
                                                <td>Found</td>
                                                <td>*</td>
                                                <td>*</td>
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


                                                <div class="col-lg-12">

                                <div class="au-card au-card--bg-yellow au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <h3><a href="health.php" style="color: #FFFFFF">VEHICLE INSURANCE</a></h3>
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <th style="color: #FFFFFF">S No.</th>
                                                <th style="color: #FFFFFF">Name</th>
                                                <th style="color: #FFFFFF">Type Of Vehicle</th>
                                                <th style="color: #FFFFFF">Vehicle Number</th>
                                                <th style="color: #FFFFFF">Registration Date</th>
                                                <th style="color: #FFFFFF">Company Name</th>
                                                <th style="color: #FFFFFF">Model</th>
                                                <th style="color: #FFFFFF">Variant</th>
                                                <th style="color: #FFFFFF">Existing Insurer</th>
                                                <th style="color: #FFFFFF">Policy Expiry Date</th>
                                                <th style="color: #FFFFFF">Existing Claims</th>
                                                <th style="color: #FFFFFF">NCB</th>
                                                <th style="color: #FFFFFF">Status</th>
                                                <th style="color: #FFFFFF">Action</th>
                                                <tbody>
                                                <?php
                                                $i=1;
                                                if($vehicle_insurance_count>0)
                                                {    
                                                 while($vehicle_insurance_row=mysqli_fetch_assoc($vehicle_insurance_result))
                                                 {
                                                ?>
                                                <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $vehicle_insurance_row['name']; ?></td>
                                                <td><?php echo $vehicle_insurance_row['type_of_vehicle']; ?></td>
                                                <td><?php echo $vehicle_insurance_row['vehicle_number']; ?></td>
                                                <td><?php echo $vehicle_insurance_row['registration_date']; ?></td>
                                                <td><?php echo $vehicle_insurance_row['company_name']; ?></td>
                                                <td><?php echo $vehicle_insurance_row['model']; ?></td>
                                                <td><?php echo $vehicle_insurance_row['variant']; ?></td>
                                                <td><?php echo $vehicle_insurance_row['existing_insurer']; ?></td>
                                                <td><?php echo $vehicle_insurance_row['policy_expiry_date']; ?></td>
                                                <td><?php echo $vehicle_insurance_row['existing_claims']; ?></td>
                                                <td><?php echo $vehicle_insurance_row['ncb']; ?></td>
                                                <td>
                                                <span class="role delete" style="background-color: #5DADE2 ">
                                                    <?php echo $vehicle_insurance_row['status']; ?>    
                                                </span>
                                                </td>
                                                
                                                <td><a href="product_request.php?vehicle_delete_id=<?php echo $vehicle_insurance_row['id']; ?>" onclick='return confirm("Áre You Sure You Want To Remove This Record?")'><span class="role delete">Delete</span></a>&nbsp&nbsp&nbsp<a href="update_mutual_fund.php?id=<?php echo $vehicle_insurance_row['id']; ?>"><span class="role edit">Edit</span></a>
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
                                                <td>*</td>    
                                                <td>*</td>
                                                <td>No</td>
                                                <td>Table</td>
                                                <td>Data</td>
                                                <td>Found</td>
                                                <td>*</td>
                                                <td>*</td>
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
<?php
include ('footer.php');
?>