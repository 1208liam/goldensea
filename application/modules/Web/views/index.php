<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin <small>Dashboard</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Add New Agent</div>  
                                    </div>
                                </div>
                            </div>
                        
                                <div class="panel-footer">
                                    <span class="pull-left">Click Arrow To add</span>
                                <span class="pull-right" onClick="myFunction()" id="dropbtn">
                                    <a href="#">
                                        <i class="fa fa-arrow-circle-down"></i>
                                    </a>
                                </span>
                                <div class="clearfix" style="clear:both;">
                                    <div id="myDropdown" class="dropdown-content">
                                        
                                        <form action="<?php echo base_url();?>Modules2/addAgent" method="post">
                                            <input class="form-control" type="text" name="fname" placeholder="First Name"><br>
                                            <input class="form-control" type="text" name="mname" placeholder="Middle Name"><br>
                                            <input class="form-control" type="text" name="lname" placeholder="Last Name"><br>
                                            <input class="form-control" type="text" name="cnumber" placeholder="Contact Number"><br>
                                            <input class="form-control" type="text" name="email" placeholder="Email Address"><br>
                                            
                                            <select class="form-control" name="um">
                                                  <option selected disabled>Select Unit Manager</option> 
                                                  <?php if(isset($manager)){?>

                                                    <?php foreach($manager as $row):?>
                                                     <option value="<?php echo $row['ManagerID']?>"><?php echo ucfirst($row['FirstName']).'  '. ucfirst($row['LastName']); ?></option>

                                                    <?php endforeach;?>
                                                  <?php }?>
                                                
                                            </select>     
                                            <br>


                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </form>  
                                    </div>
                                </div>
                             </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Add New Policy</div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                    <span class="pull-left">Click Arrow To add</span>
                                <span class="pull-right" onClick="myFunction2()" id="dropbtn">
                                    <a href="#">
                                        <i class="fa fa-arrow-circle-down"></i>
                                    </a>
                                </span>
                                <div class="clearfix" style="clear:both;">
                                    <div id="myDropdown2" class="dropdown-content">
                                        
                                        <form action="<?php echo base_url();?>Modules2/addPolicy" method="post">
                                            <input class="form-control" type="text" name="pname" placeholder="Product Name"><br>
                                            <!-- client list -->
                                                <select class="form-control" name="clientPick">
                                                  <option selected disabled>Select Client</option> 
                                                  <?php if(isset($client)){?>

                                                    <?php foreach($client as $row):?>
                                                     <option value="<?php echo $row['ClientID']?>"><?php echo ucfirst($row['cFirstName']).'  '. ucfirst($row['cLastName']); ?></option>

                                                    <?php endforeach;?>
                                                  <?php }?>
                                                
                                            </select>    
                                            <br>
                                            <!-- end client list -->
                                            <input class="form-control" type="text" name="premium" placeholder="Premium"><br>
                                            <input class="form-control" type="text" name="pamount" placeholder="Policy Amount"><br>
                                            <!-- option -->
                                                <select class="form-control" name="mode">
                                                  <option selected disabled>Mode of Payment</option>  
                                                  <option value="Annual">Annual</option>
                                                  <option value="Semi-Annual">Semi-Annual</option>
                                                  <option value="Quarterly">Quarter</option>
                                                  <option value="Monthly">Monthly</option>
                                                </select>     
                                            <!-- end option -->
                                            <br>
                                            <!-- agents -->
                                                <select class="form-control" name="agentPick">
                                                  <option selected disabled>Select Agent</option> 
                                                  <?php if(isset($agent)){?>

                                                    <?php foreach($agent as $row):?>
                                                     <option value="<?php echo $row['AgentID']?>"><?php echo ucfirst($row['FirstName']).'  '. ucfirst($row['LastName']); ?></option>

                                                    <?php endforeach;?>
                                                  <?php }?>
                                                
                                            </select>    
                                            <br>
                                            <!-- end agents -->

                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </form>  
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Add Unit Manager</div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                    <span class="pull-left">Click Arrow To add</span>
                                <span class="pull-right" onClick="myFunction3()" id="dropbtn">
                                    <a href="#">
                                        <i class="fa fa-arrow-circle-down"></i>
                                    </a>
                                </span>
                            <div class="clearfix" style="clear:both;">
                                    <div id="myDropdown3" class="dropdown-content">
                                        
                                        <form action="<?php echo base_url();?>Modules2/addManager" method="post">
                                            <input class="form-control" type="text" name="fname" placeholder="First Name"><br>
                                            <input class="form-control" type="text" name="mname" placeholder="Middle Name"><br>
                                            <input class="form-control" type="text" name="lname" placeholder="Last Name"><br>
                                            <input class="form-control" type="text" name="cnumber" placeholder="Contact Number"><br>
                                            <input class="form-control" type="text" name="email" placeholder="Email Address"><br>
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </form>  
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- client field -->
                <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Add New Client</div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                    <span class="pull-left">Click Arrow To add</span>
                                <span class="pull-right" onClick="myFunction4()" id="dropbtn">
                                    <a href="#">
                                        <i class="fa fa-arrow-circle-down"></i>
                                    </a>
                                </span>
                            <div class="clearfix" style="clear:both;">
                                    <div id="myDropdown4" class="dropdown-content">
                                        
                                        <form action="<?php echo base_url();?>Modules2/addClient" method="post">
                                            <input class="form-control" type="text" name="fname" placeholder="First Name"><br>
                                            <input class="form-control" type="text" name="mname" placeholder="Middle Name"><br>
                                            <input class="form-control" type="text" name="lname" placeholder="Last Name"><br>
                                            <input class="form-control" type="text" name="cnumber" placeholder="Contact Number"><br>
                                            <input class="form-control" type="text" name="email" placeholder="Email Address"><br>
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </form>  
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>


                <!-- end client field -->

        <!-- /#page-wrapper -->

    </div>


    <style>

        .dropdown {
            position: relative;

        }

        .dropdown-content {
            display: none;
            background-color: #f9f9f9;
            min-width: 160px;
            overflow: auto;
            z-index: 1;
        }

        .dropdown-content form {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }


        .dropdown a:hover {background-color: #f1f1f1}

        .show {display:block;}


    </style>

    <script>

        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
//            window.onclick = function(event) {
//                  if (!event.target.matches('#dropbtn')) {
//
//                    var dropdowns = document.getElementsByClassName("dropdown-content");
//                    var i;
//                    for (i = 0; i < dropdowns.length; i++) {
//                      var openDropdown = dropdowns[i];
//                      if (openDropdown.classList.contains('show')) {
//                        openDropdown.classList.remove('show');
//                      }
//                    }
//                  }
//            }


        function myFunction2() {
            document.getElementById("myDropdown2").classList.toggle("show");
        }

        function myFunction3() {
            document.getElementById("myDropdown3").classList.toggle("show");
        }

         function myFunction4() {
            document.getElementById("myDropdown4").classList.toggle("show");
        }



    </script>