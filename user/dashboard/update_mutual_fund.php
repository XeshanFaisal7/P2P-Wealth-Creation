<?php
include('header.php');

if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $data_query="SELECT * FROM `mutual_fund` WHERE `id`='$id'";
  $data_result=mysqli_query($db,$data_query);
  $row=mysqli_fetch_assoc($data_result);
}
?>
<title>Mutual Funds</title>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                  <form id="myForm" method="POST" action="product_request.php" enctype="multipart/form-data" onsubmit="return form_validation()" class="signin-form">   

                    <div class="container-fluid">
                      <?php if (isset($_GET['invalid'])) { ?>
                        <div class="p-3 mb-2 bg-danger text-white rounded form-control" style="display: inline-block; text-align: center;"> <?php echo $_GET['invalid'];?></div>
                <?php } ?> 
                 <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>UPDATE MUTUAL FUNDS</strong>
                                 
                                    </div>
                                         <div class="card-body card-block">
                                   
                                             <div class="form-group">
                                            <label for="name" class=" form-control-label"><b>Name</b></label>
                                            <input type="text" id="name" placeholder="Enter Name" value="<?php echo $row['name']?>" name="name" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="name_error"></small> 
                                             </div> 
                                            
                                          
                                            <div class="form-group">
                                            <label for="dob" class=" form-control-label"><b>Date Of Birth</b> </label>
                                            <input type="date" id="dob" name="dob" value="<?php echo $row['dob']?>" placeholder="Enter Date Of Birth" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="dob_error"></small>
                                             </div>

                                              <div class="form-group">
                                            <label for="pan_no" class=" form-control-label"><b>Pan Number</b> </label>
                                            <input type="text" id="pan_no" name="pan_no" value="<?php echo $row['pan_no']?>" placeholder="Enter Pan Number" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="pan_no_error"></small>
                                             </div>

                                              <div class="form-group">
                                            <label for="existing_demat" class=" form-control-label"><b>Existing Demat</b> </label>
                                            <select class="form-control" name="existing_demat"  id="existing_demat">
                                             <?php
                                             if($row['existing_demat']=='Yes')
                                             {
                                             ?>
                                            <option  value="Yes">Yes</option>
                                            <option  value="No">No</option>
                                             <?php 
                                             }
                                             else if($row['existing_demat']=='No')
                                             { 
                                             ?>
                                             <option  value="No">No</option>
                                            <option  value="Yes">Yes</option>
                                            
                                             <?php
                                             }
                                             ?> 
                                              
                                            </select>
                                            <small style="color: red ; font-weight : bold" id="existing_demat_error"></small>
                                             </div>

                                            <div class="form-group">
                                            <label for="type_of_investment" class=" form-control-label"><b>Type Of Investment</b> </label>
                                            <select class="form-control" value="<?php echo $row['type_of_investment']?>" name="type_of_investment" id="type_of_investment"> 

                                            <?php
                                             if($row['type_of_investment']=='Growth')
                                             {
                                             ?>
                                            <option  value="Growth">Growth</option>
                                            <option  value="Hybrid">Hybrid</option>
                                            <option  value="Debt">Debt</option>
                                            <option  value="Others">Others</option>
                                             <?php 
                                             }
                                             else if($row['type_of_investment']=='Hybrid')
                                             { 
                                             ?>
                                             
                                            <option  value="Hybrid">Hybrid</option>
                                            <option  value="Debt">Debt</option>
                                            <option  value="Others">Others</option>
                                            <option  value="Growth">Growth</option>                                            
                                             <?php
                                             }
                                             else if($row['type_of_investment']=='Debt')
                                             { 
                                             ?>
                                            <option  value="Debt">Debt</option>
                                            <option  value="Others">Others</option>
                                            <option  value="Growth">Growth</option>
                                            <option  value="Hybrid">Hybrid</option>
                                            
                                             <?php
                                             }
                                             else if($row['type_of_investment']=='Others')
                                             { 
                                             ?>
                                             
                                            <option  value="Others">Others</option>
                                            <option  value="Growth">Growth</option>
                                            <option  value="Hybrid">Hybrid</option>
                                            <option  value="Debt">Debt</option>
                                            
                                             <?php
                                             }
                                             ?>   

                                            
                                            </select>
                                            <small style="color: red ; font-weight : bold" id="type_of_investment_error"></small>
                                             </div>

                                             <div class="form-group">
                                            <label for="mode_of_investment" class=" form-control-label"><b>Mode Of Investment</b> </label>
                                            <select class="form-control" value="<?php echo $row['mode_of_investment']?>" name="mode_of_investment" id="mode_of_investment">
                                              <?php
                                             if($row['mode_of_investment']=='SIP')
                                             {
                                             ?>
                                             <option  value="SIP">SIP</option>
                                            <option  value="One-Time">One-Time</option>
                                             <?php 
                                             }
                                             else if($row['mode_of_investment']=='One-Time')
                                             { 
                                             ?>
                                             <option  value="One-Time">One-Time</option>
                                             <option  value="SIP">SIP</option>
                                            
                                            
                                             <?php
                                             }
                                             ?>
                                            
                                            </select>
                                            <small style="color: red ; font-weight : bold" id="mode_of_investment_error"></small>
                                             </div>
                                           
                                           <?php if($row['third_quote']=='yes')
                                           {
                                           ?>
                                            <input type="checkbox" name="third_quote" value="yes" checked="">
                                             <label for="vehicle1" style="display: inline-block; font-size: 12px"> Mark it checked! if you want to get the quote form third parties.</label>
                                           <?php
                                           }
                                           else
                                           {
                                           ?>
                                            <input type="checkbox" name="third_quote" value="yes">
                                             <label for="vehicle1" style="display: inline-block; font-size: 12px"> Mark it checked! if you want to get the quote form third parties.</label>
                                           <?php 
                                           }  
                                           ?>
                                           <br>
                                             <button type="submit" class="btn btn-primary" name="update_mutual_fund">Update</button>
                                      
                                        </div>


                                         
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div> 
                  </form>
                </div>
            </div>

          
<?php
include('footer.php');
?>

<script type="text/javascript">


  function form_validation()
  {

          var name = $('#name').val();
         var dob = $('#dob').val();  
         var pan_no = $('#pan_no').val();
         var existing_demat = $('#existing_demat').val();
         var type_of_investment = $('#type_of_investment').val();
         var mode_of_investment = $('#mode_of_investment').val();


          if (name.length < 1) 
          {
           document.getElementById("name_error").innerHTML = "Please Enter Your Name";
           return false;
          }
          else if(name.length > 0)
          {
           document.getElementById("name_error").innerHTML = ""; 
          }

          if (dob.length < 1) 
          {
           document.getElementById("dob_error").innerHTML = "Please Enter Your Date Of Birth";
           return false;
          }
          else if(dob.length > 0)
          {
           document.getElementById("dob_error").innerHTML = ""; 
          }

          if (pan_no.length < 1) 
          {
           document.getElementById("pan_no_error").innerHTML = "Please Enter Your Pan Number";
           return false;
          }
          else if(pan_no.length > 0)
          {
           document.getElementById("pan_no_error").innerHTML = ""; 
          }

          if (type_of_investment.length < 1) 
          {
           document.getElementById("type_of_investment_error").innerHTML = "Please Select Type Of Investment";
           return false;
          }
          else if(type_of_investment.length > 0)
          {
           document.getElementById("type_of_investment_error").innerHTML = ""; 
          }

           if (type_of_investment.length < 1) 
          {
           document.getElementById("type_of_investment_error").innerHTML = "Please Enter Your Child 1 Date Of Birth";
           return false;
          }
          else if(type_of_investment.length > 0)
          {
           document.getElementById("type_of_investment_error").innerHTML = ""; 
          }

        
     }      


  function reset_form()
  {
    document.getElementById("myForm").reset();

  }
</script>  
   