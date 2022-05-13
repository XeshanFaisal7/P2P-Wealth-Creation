<?php
include('header.php');
if(isset($_GET['id']))
{
  $company_id=$_GET['id'];
  $get_company_data_query="SELECT * FROM `company` WHERE `id`='$company_id'";
 
  $get_company_result=mysqli_query($db,$get_company_data_query);
  $row=mysqli_fetch_assoc($get_company_result);
}
?>
<title>Update Company</title>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Company</h4>
                  <p class="card-description">
                    modify fields in the form to update company
                  </p>
                  
                  <form class="forms-sample" method="post" id="myForm" action="company_request.php" enctype="multipart/form-data" onsubmit="return form_validation()">
                    <input type="hidden" name="company_id" value="<?php echo $company_id; ?>" >
                    
                    <div class="form-group">
                      <label for="company">Company</label>
                      <input type="text" class="form-control" id="company" name="company" placeholder="Enter Company Name" value="<?php echo $row['company']?>">
                      <small style="margin-top: 5px ; color: red ; font-weight : bold" id="company_error"></small>
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
    var company = $('#company').val();
   
    if (company.length < 1) 
    {
     document.getElementById("company_error").innerHTML = "Please Enter Your Company Name";
     return false;
    }
    
  }

</script>        
