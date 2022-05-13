<?php
include('header.php');
?>
<title>Add Company</title>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New Company</h4>
                  <p class="card-description">
                    Fill in the form to register new Company
                  </p>
                  <?php if (isset($_GET['success'])) { ?>
                        <div class="p-3 mb-2 bg-success text-white rounded form-control" style="text-align: center;"> 
                          <?php echo $_GET['success'];?>
                        </div>
                  <?php } ?>

                  <?php if (isset($_GET['invalid'])) { ?>
                        <div class="p-3 mb-2 bg-danger text-white rounded form-control" style="text-align: center;"> 
                          <?php echo $_GET['invalid'];?>
                        </div>
                  <?php } ?> 

                
                  <form class="forms-sample" method="post" id="myForm" action="company_request.php" enctype="multipart/form-data" onsubmit="return form_validation()">
                    <div class="form-group">
                      <label for="company">Company Name</label>
                      <input type="text" class="form-control" id="company" name="company" placeholder="Enter Company Name">
                      <small style="margin-top: 5px ; color: red ; font-weight : bold" id="company_error"></small>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light" onclick="reset_form()">Reset</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


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

  function reset_form()
  {
    document.getElementById("myForm").reset();

  }
</script>        
<?php
include('footer.php');
?>