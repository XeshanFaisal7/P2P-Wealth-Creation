<?php
include('header.php');
if(isset($_GET['id'])&&isset($_GET['status']))
{
  $customer_id=$_GET['id'];
  $customer_status=$_GET['status'];
  $get_customer_data_query="SELECT * FROM `customer` WHERE `id`='$customer_id' AND `status`='$customer_status'";
 
  $get_customer_result=mysqli_query($db,$get_customer_data_query);
  $row=mysqli_fetch_assoc($get_customer_result);
}
?>
<title>Update Customer</title>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Customer</h4>
                  <p class="card-description">
                    modify fields in the form to update customer
                  </p>
                  
                  <form class="forms-sample" method="post" id="myForm" action="customer_request.php" enctype="multipart/form-data" onsubmit="return form_validation()">
                    <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>" >
                    <input type="hidden" name="customer_status" value="<?php echo $customer_status; ?>" >
                    <div class="form-group">
                      <label for="full_name">Full Name</label>
                      <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter Full Name" value="<?php echo $row['full_name']?>">
                      <small style="margin-top: 5px ; color: red ; font-weight : bold" id="full_name_error"></small>
                    </div>
                    <div class="form-group">
                      <label for="age">Age</label>
                      <input type="number" class="form-control" id="age" name="age" placeholder="Enter Your Age" value="<?php echo $row['age']?>">
                      <small style="margin-top: 5px ; color: red ; font-weight : bold" id="age_error"></small>
                    </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                          <?php
                           if($row['gender']=='Male')
                           {
                           ?>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                          <option value="Shemale">Shemale</option>
                           <?php 
                           }
                          ?>
                          

                          <?php
                           if($row['gender']=='Female')
                           {
                           ?>
                           <option value="Female">Female</option>
                           <option value="Male">Male</option>
                          <option value="Shemale">Shemale</option>
                           <?php 
                           }
                          ?>
                          

                           <?php
                           if($row['gender']=='Shemale')
                           {
                           ?>
                           <option value="Shemale">Shemale</option>
                           <option value="Male">Male</option>
                          <option value="Female">Female</option>
                           <?php 
                           }
                          ?>
                          
                        </select>
                        <small style="margin-top: 5px ; color: red ; font-weight : bold" id="gender_error"></small>
                      </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']?>" placeholder="Enter Email Address" readonly>
                      <small style="margin-top: 5px ; color: red ; font-weight : bold" id="email_error"></small>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password']?>" placeholder="Enter Password" readonly>
                      <small style="margin-top: 5px ; color: red ; font-weight : bold" id="password_error"></small>
                    </div>
                    <div class="form-group">
                      <label for="phone">Contact No</label>
                      <input type="text" class="form-control" id="phone" value="<?php echo $row['phone']?>" name="phone" placeholder="+91XXXXXXXXXX">
                      <small style="margin-top: 5px ; color: red ; font-weight : bold" id="phone_error"></small>
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address']?>" placeholder="Enter Complete Address">
                      <small style="margin-top: 5px ; color: red ; font-weight : bold" id="address_error"></small>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary mr-2">Update</button>
                 
                  </form>
                </div>
              </div>
            </div>

        </div>
       </div>    
<?php
include('footer.php');
?>
<script type="text/javascript">
  function form_validation()
  {
    var full_name = $('#full_name').val();
    var age = $('#age').val();
    var gender = $('#gender').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var phone = $('#phone').val();
    var address = $('#address').val();

    var passw_test=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

    if (full_name.length < 1) 
    {
     document.getElementById("full_name_error").innerHTML = "Please Enter Your Full Name";
     return false;
    }
    else if(full_name.length > 0)
    {
     document.getElementById("full_name_error").innerHTML = "";
     
    }  
    if (age.length < 1) 
    {
     document.getElementById("age_error").innerHTML = "Please Enter Your Age";
     return false;
    }
    else if(age.length > 0)
    {
     document.getElementById("age_error").innerHTML = "";
     
    } 
    if (gender.length < 1) 
    {
     document.getElementById("gender_error").innerHTML = "Please Select Your Gender";
     return false;
    }
    else if(gender.length > 0)
    {
     document.getElementById("gender_error").innerHTML = "";
     
    } 
    if (email.length < 1) 
    {
     document.getElementById("email_error").innerHTML = "Please Enter Your Email Address";
     return false;
    }
    else if(email.length > 0)
    {
     document.getElementById("email_error").innerHTML = "";
     
    } 
    if (password.length < 1) 
    {
     document.getElementById("password_error").innerHTML = "Please Enter Your Password";
     return false;
    }
    else if(password.length > 0)
    {
     document.getElementById("password_error").innerHTML = "";
     
    } 

     if (!password.match(passw_test)) 
    {
     document.getElementById("password_error").innerHTML = "Password should be more than 8 characters & must use alphanumeric characters ";
     return false;
    }
    else if(password.match(passw_test))
    {
     document.getElementById("password_error").innerHTML = "";
     
    } 

    if (phone.length < 1) 
    {
     document.getElementById("phone_error").innerHTML = "Please Enter Your Phone Number";
     return false;
    }
    else if(phone.length > 0)
    {
     document.getElementById("phone_error").innerHTML = "";
     
    } 
    if (address.length < 1) 
    {
     document.getElementById("address_error").innerHTML = "Please Enter Your Complete Address";
     return false;
    }
    else if(address.length > 0)
    {
     document.getElementById("address_error").innerHTML = "";
     
    } 
  }

</script>        
