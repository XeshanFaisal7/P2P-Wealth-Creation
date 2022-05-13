<?php
include('header.php');
?>
<title>Update Vehicle Insurance</title>
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
                                        <strong>VEHICLE INSURANCE</strong>
                                 
                                    </div>
                                         <div class="card-body card-block">
                                   
                                             <div class="form-group">
                                            <label for="name" class=" form-control-label"><b>Name</b></label>
                                            <input type="text" id="name" placeholder="Enter Name" name="name" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="name_error"></small> 
                                             </div> 

                                              <div class="form-group">
                                            <label for="type_of_vehicle" class=" form-control-label"><b>Type Of Vehicle</b> </label>
                                            <select class="form-control" name="type_of_vehicle" id="type_of_vehicle">
                                            <option value="">Select Option</option>
                                            <option  value="2-Wheeler">2-Wheeler</option>
                                            <option  value="3-Wheeler">3-Wheeler</option>
                                            <option  value="4-Wheeler">4-Wheeler</option>
                                            <option  value="Others">Others</option>  
                                            </select>
                                            <small style="color: red ; font-weight : bold" id="type_of_vehicle_error"></small>
                                             </div>
                                            
                                          
                                            <div class="form-group">
                                            <label for="vehicle_number" class=" form-control-label"><b>Vehicle Number</b> </label>
                                            <input type="text" id="vehicle_number" name="vehicle_number" placeholder="Enter Vehicle Number" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="vehicle_number_error"></small>
                                             </div>

                                              <div class="form-group">
                                            <label for="registration_date" class=" form-control-label"><b>Registration Date</b> </label>
                                            <input type="date" id="registration_date" name="registration_date" placeholder="Enter Pan Number" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="registration_date_error"></small>
                                             </div>

                                            <div class="form-group">
                                            <label for="company_name" class=" form-control-label"><b>Company Name</b> </label>
                                            <input type="text" id="company_name" name="company_name" placeholder="Enter Company Name" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="company_name_error"></small>
                                             </div>

                                            <div class="form-group">
                                            <label for="model" class=" form-control-label"><b>Model</b> </label>
                                            <input type="text" id="model" name="model" placeholder="Enter Model" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="model_error"></small>
                                             </div>

                                             <div class="form-group">
                                            <label for="variant" class=" form-control-label"><b>Variant</b> </label>
                                            <select class="form-control" name="variant" id="variant">
                                            <option value="">Select Option</option>
                                            <option  value="Petrol">Petrol</option>
                                            <option  value="Diesel">Diesel</option>
                                          
                                            </select>
                                            <small style="color: red ; font-weight : bold" id="variant_error"></small>
                                             </div>

                                             <div class="form-group">
                                            <label for="existing_insurer" class=" form-control-label"><b>Existing Insurer</b> </label>
                                            <input type="text" id="existing_insurer" name="existing_insurer" placeholder="Enter Existing Insurer" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="existing_insurer_error"></small>
                                             </div>

                                               <div class="form-group">
                                            <label for="policy_expiry_date" class=" form-control-label"><b>Policy Expiry Date</b> </label>
                                            <input type="date" id="policy_expiry_date" name="policy_expiry_date" placeholder="Enter Existing Insurer" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="policy_expiry_date_error"></small>
                                             </div>

                                             <div class="form-group">
                                            <label for="existing_claims" class=" form-control-label"><b>Existing Claims</b> </label>
                                            <select class="form-control" name="existing_claims" id="existing_claims">
                                            <option value="">Select Option</option>
                                            <option  value="Yes">Yes</option>
                                            <option  value="No">No</option>
                                          
                                            </select>
                                            <small style="color: red ; font-weight : bold" id="existing_claims_error"></small>
                                             </div>

                                            <div class="form-group">
                                            <label for="ncb" class=" form-control-label"><b>NCB In Your Old Policy</b> </label>
                                             <input type="text" id="ncb" name="ncb" placeholder="%" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="ncb_error"></small>
                                             </div>

                                             <div class="form-group">
                                            <label for="image" class=" form-control-label"><b>Upload Image(JPEG/PDF)</b> </label>
                                             <input type="file" id="image" name="image" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="image_error"></small>
                                             </div>

                                             <div class="form-group">
                                            <label for="rc_copy" class=" form-control-label"><b>RC Copy</b> </label>
                                             <input type="file" id="rc_copy" name="rc_copy" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="rc_copy_error"></small>
                                             </div>

                                             <div class="form-group">
                                            <label for="existing_policy" class=" form-control-label"><b>Existing Policy</b> </label>
                                             <input type="file" id="existing_policy" name="existing_policy" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="existing_policy_error"></small>
                                             </div>



                                             <input type="checkbox" name="third_quote" value="yes">
                                             <label for="vehicle1" style="display: inline-block; font-size: 12px"> Mark it checked! if you want to get the quote form third parties.</label>
                                          
                                           <br>
                                           
                                             <button type="submit" class="btn btn-primary" name="vehicle">Submit</button>
                                          <button type="submit" class="btn btn-secondary" onclick="reset_form();">Reset</button>
                                                                                      
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
         var type_of_vehicle = $('#type_of_vehicle').val();  
         var vehicle_number = $('#vehicle_number').val();
         var registration_date = $('#registration_date').val();
         var company_name = $('#company_name').val();
         var model = $('#model').val();
          var variant = $('#variant').val();
         var existing_insurer = $('#existing_insurer').val();
         var policy_expiry_date = $('#policy_expiry_date').val();
         var existing_claims = $('#existing_claims').val();
         var ncb_in_your_policy = $('#ncb_in_your_policy').val();
         var image = $('#image').val();
         var rc_copy = $('#rc_copy').val();
         var existing_policy = $('#existing_policy').val();


          if (name.length < 1) 
          {
           document.getElementById("name_error").innerHTML = "Please Enter Your Name";
           return false;
          }
          else if(name.length > 0)
          {
           document.getElementById("name_error").innerHTML = ""; 
          }

          if (type_of_vehicle.length < 1) 
          {
           document.getElementById("type_of_vehicle_error").innerHTML = "Please Select Type Of Vehicle";
           return false;
          }
          else if(type_of_vehicle.length > 0)
          {
           document.getElementById("type_of_vehicle_error").innerHTML = ""; 
          }

          if (vehicle_number.length < 1) 
          {
           document.getElementById("vehicle_number_error").innerHTML = "Please Enter Vehicle Number";
           return false;
          }
          else if(vehicle_number.length > 0)
          {
           document.getElementById("vehicle_number_error").innerHTML = ""; 
          }

          if (registration_date.length < 1) 
          {
           document.getElementById("registration_date_error").innerHTML = "Please Enter Registration Date";
           return false;
          }
          else if(registration_date.length > 0)
          {
           document.getElementById("registration_date_error").innerHTML = ""; 
          }

          if (company_name.length < 1) 
          {
           document.getElementById("company_name_error").innerHTML = "Please Enter Company Name";
           return false;
          }
          else if(company_name.length > 0)
          {
           document.getElementById("company_name_error").innerHTML = ""; 
          }

           if (model.length < 1) 
          {
           document.getElementById("model_error").innerHTML = "Please Enter Model Name";
           return false;
          }
          else if(model.length > 0)
          {
           document.getElementById("model_error").innerHTML = ""; 
          }

           if (variant.length < 1) 
          {
           document.getElementById("variant_error").innerHTML = "Please Select Variant";
           return false;
          }
          else if(variant.length > 0)
          {
           document.getElementById("variant_error").innerHTML = ""; 
          }

          if (existing_insurer.length < 1) 
          {
           document.getElementById("existing_insurer_error").innerHTML = "Please Enter Existing Insurer";
           return false;
          }
          else if(existing_insurer.length > 0)
          {
           document.getElementById("existing_insurer_error").innerHTML = ""; 
          }

          if (policy_expiry_date.length < 1) 
          {
           document.getElementById("policy_expiry_date_error").innerHTML = "Please Enter Policy Expiry Date";
           return false;
          }
          else if(policy_expiry_date.length > 0)
          {
           document.getElementById("policy_expiry_date_error").innerHTML = ""; 
          }

          if (existing_claims.length < 1) 
          {
           document.getElementById("existing_claims_error").innerHTML = "Please Enter Existing Claims";
           return false;
          }
          else if(existing_claims.length > 0)
          {
           document.getElementById("existing_claims_error").innerHTML = ""; 
          }

          if (ncb.length < 1) 
          {
           document.getElementById("ncb_error").innerHTML = "Please Enter NCB %";
           return false;
          }
          else if(ncb.length > 0)
          {
           document.getElementById("ncb_error").innerHTML = ""; 
          }

          if (image.length < 1) 
          {
           document.getElementById("image_error").innerHTML = "Please Choose File";
           return false;
          }
          else if(image.length > 0)
          {
            var allowedExtensions =  /(\.jpg|\.jpeg|\.pdf)$/i;

            if (!allowedExtensions.exec(image)) 
            {
                document.getElementById("image_error").innerHTML = "Only JPEG/PDF file allowed";
                return false;
            } 
            else
            {
               var size = parseFloat(document.getElementById("image").files[0].size / (1024 * 1024)).toFixed(2); 
               if(size > 3) {
                 document.getElementById("image_error").innerHTML = "Please select File size less than 3 MB";
                 return false;
               }
               else
               {
                    document.getElementById("image_error").innerHTML = "";
               }
               
            }  
           
          }

          if (rc_copy.length < 1) 
          {
           document.getElementById("rc_copy_error").innerHTML = "Please Upload RC Copy";
           return false;
          }

          else if(rc_copy.length > 0)
          {
            var allowedExtensions =  /(\.jpg|\.jpeg|\.pdf)$/i;

            if (!allowedExtensions.exec(rc_copy)) 
            {
                document.getElementById("rc_copy_error").innerHTML = "Only JPEG/PDF file allowed";
                return false;
            } 

            else
            {
               var size = parseFloat(document.getElementById("rc_copy").files[0].size / (1024 * 1024)).toFixed(2); 
               if(size > 3) {
                 document.getElementById("rc_copy_error").innerHTML = "Please select File size less than 3 MB";
                 return false;
               }
               else
               {
                    document.getElementById("rc_copy_error").innerHTML = "";
               }
               
            }  
           
          }

          if (existing_policy.length < 1) 
          {
           document.getElementById("existing_policy_error").innerHTML = "Please Upload Existing Policy File";
           return false;
          }
          
          else if(existing_policy.length > 0)
          {
            var allowedExtensions =  /(\.jpg|\.jpeg|\.pdf)$/i;

            if (!allowedExtensions.exec(existing_policy)) 
            {
                document.getElementById("existing_policy_error").innerHTML = "Only JPEG/PDF file allowed";
                return false;
            } 
            else
            {
               var size = parseFloat(document.getElementById("existing_policy").files[0].size / (1024 * 1024)).toFixed(2); 
               if(size > 3) {
                 document.getElementById("existing_policy_error").innerHTML = "Please select File size less than 3 MB";
                 return false;
               }
               else
               {
                    document.getElementById("existing_policy_error").innerHTML = "";
               }
               
            }  
           
          }

        
     }      


  function reset_form()
  {
    document.getElementById("myForm").reset();

  }
</script>  
   