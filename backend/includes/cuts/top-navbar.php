<div id="wrapper">
	        <nav class="navbar navbar-default navbar-fixed-top" id="top-menu" role="navigation" style="margin-bottom: 0">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="admin"><?php
	                if($user->isLoggedIn()) {
	                	echo 'Welcome <strong>'.$user->data()->name.'</strong>';
	                }
	                 ?></a>
	            </div>
	            <!-- /.navbar-header -->

	            <ul class="nav navbar-top-links navbar-right">
	                
	                <!-- /.dropdown -->
	                <li class="dropdown">
	                    <a class="dropdown-toggle" id="icon-top" data-toggle="dropdown" href="#">
	                        <i class="glyphicon glyphicon-user"></i>  <i class="fa fa-caret-down white"></i>
	                    </a>
	                    <ul class="dropdown-menu dropdown-user">
	                        <li><a href="#"><i class="glyphicon glyphicon-user"></i> User Profile</a>
	                        </li>
	                        <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Settings</a>
	                        </li>
	                        <li class="divider"></li>
	                        <li><a href="<?=Url::base()?>logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
	                        </li>
	                    </ul>
	                    <!-- /.dropdown-user -->
	                </li>
	                <!-- /.dropdown -->
	            </ul>
	            <!-- /.navbar-top-links -->