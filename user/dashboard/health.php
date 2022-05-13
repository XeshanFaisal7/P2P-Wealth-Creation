<?php
include('header.php');
?>
<title>Health Insurance</title>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                  <form id="myForm" method="POST" action="product_request.php" enctype="multipart/form-data" onsubmit="return form_validation()" class="signin-form">   
                    <div class="container-fluid">
                      <?php if (isset($_GET['invalid'])) { ?>
                        <div class="p-3 mb-2 bg-danger text-white rounded form-control" style="display: inline-block; text-align: center;"> <?php echo $_GET['invalid'];?></div>
                <?php } ?> 
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>HEALTH INSURANCE</strong>
                                 
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="category" class=" form-control-label"><b>CATEGORY</b></label>
                                            <select id="category" name="category" class="form-control" onchange="show_fields()">
                                            <option value="Individual">Individual</option>
                                            <option value="Family">Family</option>    
                                            </select>

                                        </div>
                                        <div id="self">
                                          <div class="row">
                                             <div class="col-lg-6">
                                             <div class="form-group">
                                            <label for="self_dob" class=" form-control-label"><b>SELF</b></label>
                                            <input type="date" id="self_dob" name="self_dob" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="self_dob_error"></small> 
                                             </div> 
                                            
                                             </div> 
                                             <div class="col-lg-6">
                                            <div class="form-group">
                                            <label for="self_ped" class=" form-control-label"><b>Pre-Existing</b> </label>
                                            <input type="text" id="self_ped" name="self_ped" placeholder="Enter Self PED" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="self_ped_error"></small>
                                             </div>
                                                
                                            </div>    
                                            
                                          </div>
                                        </div>

                                         <div id="spouse" style="display: none">
                                          <div class="row">
                                             <div class="col-lg-6">
                                             <div class="form-group">
                                            <label for="spouse_dob" class=" form-control-label"><b>SPOUSE</b></label>
                                            <input type="date" id="spouse_dob" name="spouse_dob" class="form-control">
                                             
                                            <small style="color: red ; font-weight : bold" id="spouse_dob_error"></small>  
                                             </div>
                                            </div> 
                                             <div class="col-lg-6">
                                            <div class="form-group">
                                            <label for="spouse_ped" class=" form-control-label"><b>Pre-Existing</b> </label>
                                            <input type="text" id="spouse_ped" name="spouse_ped" placeholder="Enter Spouse PED" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="spouse_ped_error"></small> 
                                             </div>   
                                            </div>    
                                            
                                          </div>
                                        </div>

                                         <div id="child_1" style="display: none">
                                          <div class="row">
                                             <div class="col-lg-6">
                                             <div class="form-group">
                                            <label for="child_1_dob" class=" form-control-label"><b>Child 1</b></label>
                                            <input type="date" id="child_1_dob" name="child_1_dob" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="child_1_dob_error"></small>
                                             </div>
                                               
                                             </div> 
                                             <div class="col-lg-6">
                                            <div class="form-group">
                                            <label for="child_1_ped" class=" form-control-label"><b>Pre-Existing</b> </label>
                                            <input type="text" id="child_1_ped" name="child_1_ped" placeholder="Enter Child 1 PED" class="form-control">
                                             
                                            <small style="color: red ; font-weight : bold" id="child_1_ped_error"></small> </div>    
                                            </div>    
                                            
                                          </div>
                                        </div>

                                        <div id="child_2" style="display: none">
                                          <div class="row">
                                             <div class="col-lg-6">
                                             <div class="form-group">
                                            <label for="child_2_dob" class=" form-control-label"><b>Child 2</b></label>
                                            <input type="date" id="child_2_dob" name="child_2_dob" class="form-control">
                                             
                                            <small style="color: red ; font-weight : bold" id="child_2_dob_error"></small>  
                                             </div>
                                             </div> 
                                             <div class="col-lg-6">
                                            <div class="form-group">
                                            <label for="child_2_ped" class=" form-control-label"><b>Pre-Existing</b> </label>
                                            <input type="text" id="child_2_ped" name="child_2_ped" placeholder="Enter Child 2 PED" class="form-control">
                                             
                                            <small style="color: red ; font-weight : bold" id="child_2_ped_error"></small>
                                            </div>    
                                            </div>    
                                            
                                          </div>
                                        </div>

                                         <div class="form-group">
                                            <label for="sum_insured" class=" form-control-label"><b>SUM INSURED</b></label>
                                            <select id="sum_insured" name="sum_insured" class="form-control">
                                            <option value="">Select Sum</option>
                                            <option value="2000000">2,000,000</option>
                                            <option value="2500000">2,500,000</option>
                                            <option value="3000000">3,000,000</option>
                                            <option value="3500000">3,500,000</option>
                                            <option value="4000000">4,000,000</option>
                                            <option value="4500000">4,500,000</option>
                                            <option value="5000000">5,000,000</option>
                                            <option value="5500000">5,500,000</option>
                                            <option value="6000000">6,000,000</option>
                                            <option value="6500000">6,500,000</option>
                                            <option value="7000000">7,000,000</option>
                                            <option value="7500000">7,500,000</option>
                                            <option value="8000000">8,000,000</option>
                                            <option value="8500000">8,500,000</option>
                                            <option value="9000000">9,000,000</option>
                                            <option value="9500000">9,500,000</option>
                                            <option value="10000000">10,000,000</option>
                                            <option value="10500000">10,500,000</option>
                                            <option value="11000000">11,000,000</option>
                                            <option value="11500000">11,500,000</option>
                                            <option value="12000000">12,000,000</option>
                                            <option value="12500000">12,500,000</option>
                                            <option value="13000000">13,000,000</option>
                                            <option value="13500000">13,500,000</option>
                                            <option value="14000000">14,000,000</option>
                                            <option value="14500000">14,500,000</option>
                                            <option value="15000000">15,000,000</option>
                                            <option value="15500000">15,500,000</option>
                                            <option value="16000000">16,000,000</option>
                                            <option value="16500000">16,500,000</option>
                                            <option value="17000000">17,000,000</option>
                                            <option value="17500000">17,500,000</option>
                                            <option value="18000000">18,000,000</option>
                                            <option value="18500000">18,500,000</option>
                                            <option value="19000000">19,000,000</option>
                                            <option value="19500000">19,500,000</option>
                                            <option value="20000000">20,000,000</option>    
                                            </select>    
                                            <small style="color: red ; font-weight : bold" id="sum_insured_error"></small>
                                        </div>
                                             <input type="checkbox" name="third_quote" value="yes">
                                             <label for="vehicle1" style="display: inline-block; font-size: 12px"> Mark it checked! if you want to get the quote form third parties.</label>
                                          
                                           <br>

                                          <button type="submit" class="btn btn-primary" name="health">Submit</button>
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

  function show_fields()
  {

   var category = $('#category').val();

   if(category=='family')
   {
    $('#spouse').show();
    $('#child_1').show();
    $('#child_2').show();
   }
   else
   {
      $('#spouse').hide();
    $('#child_1').hide();
    $('#child_2').hide();

   }

  }  

  function form_validation()
  {
    var category = $('#category').val();
    if(category=='individual')
      {
         var self_dob = $('#self_dob').val();
         var self_ped = $('#self_ped').val();
         var sum_insured = $('#sum_insured').val();  
        
         if (self_dob.length < 1) 
          {
           document.getElementById("self_dob_error").innerHTML = "Please Enter Your Date Of Birth";
           return false;
          }
          else if(self_dob.length > 0)
          {
           document.getElementById("self_dob_error").innerHTML = ""; 
          }

          if (self_ped.length < 1) 
          {
           document.getElementById("self_ped_error").innerHTML = "Please Enter PED";
           return false;
          }
          else if(self_ped.length > 0)
          {
           document.getElementById("self_ped_error").innerHTML = ""; 
          }

          if (sum_insured.length < 1) 
          {
           document.getElementById("sum_insured_error").innerHTML = "Please Select Sum Insured";
           return false;
          }
          else if(sum_insured.length > 0)
          {
           document.getElementById("sum_insured_error").innerHTML = ""; 
          }



      }

   else if(category=='family')
     {
          var self_dob = $('#self_dob').val();
         var self_ped = $('#self_ped').val();  
         var spouse_dob = $('#spouse_dob').val();
         var spouse_ped = $('#spouse_ped').val();
         var child_1_dob = $('#child_1_dob').val();
         var child_1_ped = $('#child_1_ped').val();
         var child_2_dob = $('#child_2_dob').val();
         var child_2_ped = $('#child_2_ped').val();
         var sum_insured = $('#sum_insured').val();

          if (self_dob.length < 1) 
          {
           document.getElementById("self_dob_error").innerHTML = "Please Enter Your Date Of Birth";
           return false;
          }
          else if(self_dob.length > 0)
          {
           document.getElementById("self_dob_error").innerHTML = ""; 
          }

          if (self_ped.length < 1) 
          {
           document.getElementById("self_ped_error").innerHTML = "Please Enter Your PED";
           return false;
          }
          else if(self_ped.length > 0)
          {
           document.getElementById("self_ped_error").innerHTML = ""; 
          }

          if (spouse_dob.length < 1) 
          {
           document.getElementById("spouse_dob_error").innerHTML = "Please Enter Your Spouse Date Of Birth";
           return false;
          }
          else if(spouse_dob.length > 0)
          {
           document.getElementById("spouse_dob_error").innerHTML = ""; 
          }

          if (spouse_ped.length < 1) 
          {
           document.getElementById("spouse_ped_error").innerHTML = "Please Enter Your Spouse PED";
           return false;
          }
          else if(spouse_ped.length > 0)
          {
           document.getElementById("spouse_ped_error").innerHTML = ""; 
          }

           if (child_1_dob.length < 1) 
          {
           document.getElementById("child_1_dob_error").innerHTML = "Please Enter Your Child 1 Date Of Birth";
           return false;
          }
          else if(child_1_dob.length > 0)
          {
           document.getElementById("child_1_dob_error").innerHTML = ""; 
          }

          if (child_1_ped.length < 1) 
          {
           document.getElementById("child_1_ped_error").innerHTML = "Please Enter Your Child 1 PED";
           return false;
          }
          else if(child_1_ped.length > 0)
          {
           document.getElementById("child_1_ped_error").innerHTML = ""; 
          }

          if (child_2_dob.length < 1) 
          {
           document.getElementById("child_2_dob_error").innerHTML = "Please Enter Your Child 2 Date Of Birth";
           return false;
          }
          else if(child_2_dob.length > 0)
          {
           document.getElementById("child_2_dob_error").innerHTML = ""; 
          }

          if (child_2_ped.length < 1) 
          {
           document.getElementById("child_2_ped_error").innerHTML = "Please Enter Your Child 2 PED";
           return false;
          }
          else if(child_2_ped.length > 0)
          {
           document.getElementById("child_2_ped_error").innerHTML = ""; 
          }

          if (sum_insured.length < 1) 
          {
           document.getElementById("sum_insured_error").innerHTML = "Please Select Sum Insured";
           return false;
          }
          else if(sum_insured.length > 0)
          {
           document.getElementById("sum_insured_error").innerHTML = ""; 
          }
     }      
   
    

  }

  function reset_form()
  {
    document.getElementById("myForm").reset();

  }
</script>  
   