<?php
include('header.php');
?>
<title>Add Package Plan</title>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Package Plan</h4>
                  <p class="card-description">
                    Fill in the form to register new package plan
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

                
                  <form class="forms-sample" method="post" id="myForm" action="plan_request.php" enctype="multipart/form-data" onsubmit="return form_validation()">
                    <div class="form-group">
                      <label for="product">Product</label>
                      <select type="text" class="form-control" id="product" name="product">
                       <option value="">Select Product</option>
                       <option value="term_life_insurance">Term Life Insurance</option> 
                       <option value="saving_investment_life_insurance">Saving/Investment Life Insurance</option> 
                       <option value="health">Health</option>
                       <option value="vehicle">Vehicle</option>
                       <option value="mutual_funds">Mutual Funds</option>
                       </select> 
                      <small style="margin-top: 5px ; color: red ; font-weight : bold" id="product_error"></small>
                    </div>
                     <div class="form-group">
                      <label for="plan_category">Plan Category</label>
                      <input type="text" class="form-control" id="plan_category" name="plan_category" placeholder="Enter Plan Category">
                      <small style="margin-top: 5px ; color: red ; font-weight : bold" id="plan_category_error"></small>
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
    var product = $('#product').val();
    var plan_category = $('#plan_category').val();
    

    if (product.length < 1) 
    {
     document.getElementById("product_error").innerHTML = "Please Select Product";
     return false;
    }
    
    if (plan_category.length < 1) 
    {
     document.getElementById("plan_category_error").innerHTML = "Please Enter Plan Category";
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