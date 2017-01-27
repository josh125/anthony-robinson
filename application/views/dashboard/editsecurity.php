<!-- Header -->
<?php $this->load->view('dashboard/includes/header');?>
<!-- Nav -->
<?php $this->load->view('dashboard/includes/nav');?>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="text-center"><small>Change Password</small></h1>
				</div>
				<div class="panel-body">
					<?php echo form_open('manage/dashboard/change_password');?>
					<div class="row">
						<div class="col-md-12 text-center">
							<div><?php echo $this->session->flashdata('message');?></div>
						</div>					
					</div>
					<div class="row">
						<div class="col-md-6">
							<h1><small>Enter your new password</small></h1>
						</div>
					</div>					
					<div class="row">
						<div class="col-md-2">
							<label>New Password</label>
						</div>
						<div class="col-md-4">
							<div class="input-group input-group-sm">
								<div class="input-group-addon"><i class="fa fa-lock fa-fw"></i></div>
								<?php
									$input = array(
										'name' => 'new_password',
										'class' => 'form-control',
										'placeholder' => 'Input your new password'
									);
									echo form_password($input);
								?>	
							</div>
						</div>
						<div class="col-md-6">
							<?php echo form_error('new_password'); ?>
						</div>						
					</div><br>
					<div class="row">
						<div class="col-md-2">
							<label>Re-type Password</label>
						</div>
						<div class="col-md-4">
							<div class="input-group input-group-sm">
								<div class="input-group-addon"><i class="fa fa-lock fa-fw"></i></div>
								<?php
									$input = array(
										'name' => 'retype_password',
										'class' => 'form-control',
										'placeholder' => 're-type your new password'
									);
									echo form_password($input);
								?>	
							</div>
						</div>
						<div class="col-md-6">
							<?php echo form_error('retype_password'); ?>
						</div>							
					</div><hr>
					<div class="row">
						<div class="col-md-2">
							<label>Old Password</label>
						</div>
						<div class="col-md-4">
							<div class="input-group input-group-sm">
								<div class="input-group-addon"><i class="fa fa-lock fa-fw"></i></div>
								<?php
									$input = array(
										'name' => 'old_password',
										'class' => 'form-control',
										'placeholder' => 'Input your old password'
									);
									echo form_password($input);
								?>	
							</div>
						</div>
						<div class="col-md-6">
							<?php echo form_error('old_password'); ?>
						</div>						
					</div>
					<div class="row"><br>
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary btn-xs">Submit</button>										
						</div>
					</div>			
					<?php echo form_close();?>		
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<?php $this->load->view('dashboard/includes/footer');?>