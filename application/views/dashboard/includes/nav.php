<header class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a href="<?php echo base_url();?>manage/dashboard" id="brand-header" class="navbar-brand">Robinson Communities</a>
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<nav class="collapse navbar-collapse navHeaderCollapse" role="navigation">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><i class="fa fa-globe fa-fw fa-lg"></i></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url();?>manage/dashboard/notification">No Notification</a></li>
					</ul>
				</li>
				<li><a href="<?php echo base_url();?>manage/dashboard/message"><i class="fa fa-envelope fa-fw fa-lg"></i></a></li>
        		<li class="dropdown">                          
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fa fa-gears fa-lg"></i></a>
                    <ul class="dropdown-menu">
                     <li><a href="<?php echo base_url();?>manage/dashboard/notification">Notification</a></li>
                     <li><a href="<?php echo base_url();?>manage/dashboard/message">Message</a></li>
                     <li><a href="<?php echo base_url();?>manage/dashboard/blogs">Blog</a></li>
                     <li><a href="<?php echo base_url();?>manage/dashboard/settings">Settings</a></li>
                     <li><a href="<?php echo base_url();?>manage/dashboard/help">Help</a></li>
                     <li><a href="<?php echo base_url();?>manage/manage/logout/">Logout</a></li>
                    </ul>
              	</li>        		
			</ul>
			<ul class="nav navbar-nav navbar-left">
				<li><a href="<?php echo base_url();?>manage/dashboard">Home</a></li>
				<li><a href="<?php echo base_url();?>manage/dashboard/blogs">Blog</a></li>
				<li><a href="<?php echo base_url();?>manage/hostconn">Hostconn</a></li>
			</ul>
		</nav>
	</div>
</header>
<br/><br/><br/>