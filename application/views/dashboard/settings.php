<!-- Header -->
<?php $this->load->view('dashboard/includes/header');?>
<!-- Nav -->
<?php $this->load->view('dashboard/includes/nav');?>
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12 text-center">
					<div><?php echo $this->session->flashdata('message');?></div>
				</div>					
			</div><br>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 text-center">	
							<a href="<?php echo base_url();?>manage/dashboard/edit_my_account" class="btn btn-primary btn-xs">Edit my Account</a>
							<a href="<?php echo base_url();?>manage/dashboard/security_info" class="btn btn-primary btn-xs">Change Password</a>
						</div>
					</div>				
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-10 col-md-offset-2">
									<h1><small>Account Information</small></h1><br>
									<?php foreach ($account_info as $info): ?>
										<p><?php echo $info->fullname;?></p><hr>
										<p><?php echo $info->address;?></p><hr>
										<p><?php echo $info->business_name;?></p><hr>
									<?php endforeach ?>
								</div>
							</div>							
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-10 col-md-offset-2">
									<h1><small>Contact Information</small></h1><br>
									<?php foreach ($account_info as $info): ?>
										<p><i class="fa fa-envelope-o fa-lg fa-fw"></i> <?php echo $info->email;?></p>
										<div class="row">
								            <div class="col-md-12">
								              <?php if(count($mobile)):?> <?php foreach ($mobile as $cp): ?>
								                <p><i class="fa fa-mobile fa-lg fa-fw"></i> <?php echo $cp['contact_no'];?></p>    
								              <?php endforeach ?><?php endif ?>
								            </div>
							          	</div>
								        <div class="row">
								            <div class="col-md-12">
								              <?php if(count($telephone)):?> <?php foreach ($telephone as $phone): ?>
								                <p><i class="fa fa-phone fa-lg fa-fw"></i> <?php echo $phone['contact_no'];?></p>
								              <?php endforeach ?><?php endif ?>   
								            </div>
								        </div>
									<?php endforeach ?>
								</div>
							</div>							
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</div>
<!-- Footer -->
<?php $this->load->view('dashboard/includes/footer');?>
