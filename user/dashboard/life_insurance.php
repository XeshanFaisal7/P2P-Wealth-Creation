<?php
include('header.php');
?>
<title>Life Insurance</title>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                  <form id="myForm" method="POST" action="product_request.php" enctype="multipart/form-data" onsubmit="return form_validation()" class="signin-form">   
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>LIFE INSURANCE</strong>
                                 
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="category" class=" form-control-label"><b>Category</b></label>
                                            <select id="category" name="category" class="form-control" onchange="show_fields()">
                                            <option value="Term">Term</option>
                                            <option value="Saving">Saving</option>
                                            <option value="Investment">Investment</option>    
                                            </select>
                                        <small style="color: red ; font-weight : bold" id="category_error"></small> 
                                        </div>
                                             
                                              <div class="form-group">
                                            <label for="name" class=" form-control-label"><b>Name</b></label>
                                            <input type="text" id="name" name="name" placeholder="Enter Name" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="name_error"></small> 
                                             </div> 
                                       
                                             <div class="form-group">
                                            <label for="dob" class=" form-control-label"><b>Date Of Birth</b></label>
                                            <input type="date" id="dob" name="dob" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="dob_error"></small> 
                                             </div> 

                                             <div class="form-group">
                                            <label for="gender" class=" form-control-label"><b>Gender</b></label>
                                            <select id="gender" name="gender" class="form-control">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Shemale">Shemale</option>    
                                            </select>
                                           <small style="color: red ; font-weight : bold" id="gender_error"></small> 
                                             </div>
                                         

                                        <div id="term">
                                          <div class="row">
                                             <div class="col-lg-6">
                                             <div class="form-group">
                                            <label for="annual_income" class=" form-control-label"><b>Annual Income</b></label>
                                            <input type="number" id="annual_income" placeholder="Enter Annual Income" name="annual_income" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="annual_income_error"></small> 
                                             </div> 
                                            
                                             </div> 
                                             <div class="col-lg-6">
                                            <div class="form-group">
                                            <label for="sum_assured" class=" form-control-label"><b>Sum Assured</b> </label>
                                            <input type="number" id="sum_assured" name="sum_assured" placeholder="Enter Sum Assured" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="sum_assured_error"></small>
                                             </div>
                                                
                                            </div>    
                                            
                                          </div>
                                        </div>

                                         <div id="saving" style="display: none">
                                       
                                            
                                             <div class="form-group">
                                            <label for="frequency" class=" form-control-label"><b>Frequency</b></label>
                                            <select id="frequency" name="frequency" class="form-control">
                                            <option value="">Select Frequency</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Half Yearly">Half Yearly</option>
                                            <option value="Yearly">Yearly</option>
                                            
                                            </select>  
                                             
                                            <small style="color: red ; font-weight : bold" id="frequency_error"></small>  
                                             </div>
                                          
                                        </div>

                                         <div class="form-group">
                                            <label for="policy_term" class=" form-control-label"><b>Policy Term</b></label>
                                            <input type="text" id="policy_term" placeholder="Enter Policy Term (Till Age)" name="policy_term" class="form-control">
                                            <small style="color: red ; font-weight : bold" id="policy_term_error"></small> 
                                             </div> 

                                             <div class="form-group">
                                            <label for="occupation" class=" form-control-label"><b>Occupation</b></label>
                                            <select id="occupation" name="occupation" class="form-control">
                                            <option value="">Select Occupation</option>
                                            <option value="Salaried">Salaried</option>
                                            <option value="Agriculture">Agriculture</option>
                                            <option value="Housewife">Housewife</option>
                                            <option value="Unemployed">Unemployed</option>
                                            <option value="Others">Others</option>
                                            
                                            </select>  
                                             
                                            <small style="color: red ; font-weight : bold" id="occupation_error"></small>  
                                             </div>  

                                               <input type="checkbox" name="third_quote" value="yes">
                                             <label for="vehicle1" style="display: inline-block; font-size: 12px"> Mark it checked! if you want to get the quote form third parties.</label>
                                          
                                           <br>

                                          <button type="submit" class="btn btn-primary" name="life">Submit</button>
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

   if(category=='Saving' || category=='Investment')
   {
    $('#saving').show();
    $('#term').hide();
   
   }
   else
   {
      $('#saving').hide();
      $('#term').show();
   }

  }  

  function form_validation()
  {
    var category = $('#category').val();
    if(category=='Term')
      {

         var name = $('#name').val();
         var dob = $('#dob').val();
         var gender = $('#gender').val(); 
         var annual_income = $('#annual_income').val();
         var sum_assured = $('#sum_assured').val();
         var policy_term = $('#policy_term').val(); 
         var occupation = $('#occupation').val(); 

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

          if (gender.length < 1) 
          {
           document.getElementById("gender_error").innerHTML = "Please Select Gender";
           return false;
          }
          else if(gender.length > 0)
          {
           document.getElementById("gender_error").innerHTML = ""; 
          }

          if (annual_income.length < 1) 
          {
           document.getElementById("annual_income_error").innerHTML = "Please Enter Annual Income";
           return false;
          }
          else if(annual_income.length > 0)
          {
           document.getElementById("annual_income_error").innerHTML = ""; 
          }

          if (sum_assured.length < 1) 
          {
           document.getElementById("sum_assured_error").innerHTML = "Please Enter Sum Assured";
           return false;
          }
          else if(sum_assured.length > 0)
          {
           document.getElementById("sum_assured_error").innerHTML = ""; 
          }

          if (policy_term.length < 1) 
          {
           document.getElementById("policy_term_error").innerHTML = "Please Enter Policy Term Till Age";
           return false;
          }
          else if(policy_term.length > 0)
          {
           document.getElementById("policy_term_error").innerHTML = ""; 
          }

          if (occupation.length < 1) 
          {
           document.getElementById("occupation_error").innerHTML = "Please Select Occupation";
           return false;
          }
          else if(occupation.length > 0)
          {
           document.getElementById("occupation_error").innerHTML = ""; 
          }



      }

   else if(category=='Saving' || category=='Investment')
     {
          var name = $('#name').val();
          var dob = $('#dob').val();
         var gender = $('#gender').val(); 
         var frequency = $('#frequency').val();
         var policy_term = $('#policy_term').val(); 
         var occupation = $('#occupation').val();  

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

          if (gender.length < 1) 
          {
           document.getElementById("gender_error").innerHTML = "Please Select Gender";
           return false;
          }
          else if(gender.length > 0)
          {
           document.getElementById("gender_error").innerHTML = ""; 
          }

          if (frequency.length < 1) 
          {
           document.getElementById("frequency_error").innerHTML = "Please Select Frequency";
           return false;
          }
          else if(frequency.length > 0)
          {
           document.getElementById("frequency_error").innerHTML = ""; 
          }

          if (policy_term.length < 1) 
          {
           document.getElementById("policy_term_error").innerHTML = "Please Enter Policy Term Till Age";
           return false;
          }
          else if(policy_term.length > 0)
          {
           document.getElementById("policy_term_error").innerHTML = ""; 
          }

          if (occupation.length < 1) 
          {
           document.getElementById("occupation_error").innerHTML = "Please Select Occupation";
           return false;
          }
          else if(occupation.length > 0)
          {
           document.getElementById("occupation_error").innerHTML = ""; 
          }
     }      
   
    

  }

  function reset_form()
  {
    document.getElementById("myForm").reset();

  }
</script>  
   