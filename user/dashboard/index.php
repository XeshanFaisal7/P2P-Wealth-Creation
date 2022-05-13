<?php
include('header.php');
?>
<title>Dashboard</title>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       <?php if (isset($_GET['success'])) { ?>
                        <div class="p-3 mb-2 bg-success text-white rounded form-control" style="display: inline-block; text-align: center;"> <?php echo $_GET['success'];?></div>
                <?php } ?> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1" style="font-family: Roboto ;"><b>INSURANCE MADE SIMPLY FOR YOU</b></h2>
                             
                                </div>

                               
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class='fas fa-heartbeat'></i>
                                            </div>
                                            <div class="text">
                                              <br>
                                                <h3><a href="health.php" style="color: #FFFFFF">HEALTH INSURANCE</a></h3>
                                                <span>P2P Insurance</span>
                                            </div>
                                        </div>
                                         <div class="overview-chart">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                       <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class='fas fa-money'></i>
                                            </div>
                                            <div class="text">
                                              <br>
                                                <h3><a href="mutual_fund.php" style="color: #FFFFFF">MUTUAL<BR> FUNDS</a></h3>
                                                <span>P2P Insurance</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                              <i class="fas fa-star-of-life"></i>
                                            </div>
                                            <div class="text">
                                              <br>
                                                <h3><a href="life_insurance.php" style="color: #FFFFFF">LIFE<BR> INSURANCE</a></h3>
                                                <span>P2P Insurance</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                          <div class="overview-box clearfix">
                                            <div class="icon">
                                               <i class="fas fa-car-side"></i>
                                            </div>
                                            <div class="text">
                                              <br>
                                                <h3><a href="vehicle_insurance.php" style="color: #FFFFFF">VEHICLE INSURANCE</a></h3>
                                                <span>P2P Insurance</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                       

<?php include('footer.php'); ?>