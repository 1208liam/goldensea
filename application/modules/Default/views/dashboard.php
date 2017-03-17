<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo base_url();?>Web/index"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <!-- <a href="<?php echo base_url();?>Web/chart"><i class="fa fa-fw fa-bar-chart-o"></i> Generate Reports</a> -->
                        <a href="javascript:;" data-toggle="collapse" data-target="#reports"><i class="fa fa-fw fa-bar-chart-o"></i> Reports (Agents) <i class="fa fa-fw fa-caret-down"></i> </a>
                                <ul id="reports" class="collapse">
                                    <li>
                                        <a href="<?php echo base_url();?>Web/TotalPolicy">Total Agent Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Total Agent ANP</a>
                                    </li>
                                    <li>
                                        <a href="#">Total Agent FYP</a>
                                    </li>
                                </ul>
                    </li>
                    <li>
                        <!-- <a href="<?php echo base_url();?>Web/chart"><i class="fa fa-fw fa-bar-chart-o"></i> Generate Reports</a> -->
                        <a href="javascript:;" data-toggle="collapse" data-target="#reports2"><i class="fa fa-fw fa-bar-chart-o"></i> Reports (Unit Manager) <i class="fa fa-fw fa-caret-down"></i> </a>
                                <ul id="reports2" class="collapse">
                                    <li>
                                        <a href="<?php echo base_url();?>Web/TotalPolicy">Total UM Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Total UM ANP</a>
                                    </li>
                                    <li>
                                        <a href="#">Total UM FYP</a>
                                    </li>
                                </ul>
                    </li>
                    <li>
                        <!-- <a href="<?php echo base_url();?>Web/chart"><i class="fa fa-fw fa-bar-chart-o"></i> Generate Reports</a> -->
                        <a href="javascript:;" data-toggle="collapse" data-target="#reports3"><i class="fa fa-fw fa-bar-chart-o"></i> Reports (Branch) <i class="fa fa-fw fa-caret-down"></i> </a>
                                <ul id="reports3" class="collapse">
                                    <li>
                                        <a href="<?php echo base_url();?>Web/TotalPolicy">Total Branch Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Total Branch ANP</a>
                                    </li>
                                    <li>
                                        <a href="#">Total Branch FYP</a>
                                    </li>
                                </ul>
                    </li>

                    
                </ul>
    </div>
            <!-- /.navbar-collapse -->
 </nav>