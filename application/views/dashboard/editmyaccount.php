<!-- Header -->
<?php $this->load->view('dashboard/includes/header');?>
<!-- Nav -->
<?php $this->load->view('dashboard/includes/nav');?>

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-body"><?php echo form_open('manage/dashboard/submit_edit_account');?>
					<h1><small>My Account</small></h1>
					<?php foreach ($account_info as $info): ?>
						<div class="row">
							<div class="col-md-4">
								<div class="input-group input-group-sm">
									<span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
									<?php 
										$input = array(
											'name' => 'fullname',
											'value' => $info->fullname,
											'class' => 'form-control',
										);
										echo form_input($input);
									?>	
								</div>
							</div>
							<div class="col-md-8">
								<?php echo form_error('fullname'); ?>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-4">
								<div class="input-group input-group-sm">
									<span class="input-group-addon "><span class="glyphicon glyphicon-home"></span></span>
									<?php 
										$input = array(
											'name' => 'address',
											'value' => $info->address,
											'class' => 'form-control',
										);
										echo form_input($input);
									?>
								</div>								
							</div>
							<div class="col-md-8">
								<?php echo form_error('address'); ?>
							</div>
						</div>
				<hr>
					<h1><small>Contact Information</small></h1>
						<div class="row">
							<div class="col-md-4">
								<div class="input-group input-group-sm">
									<span class="input-group-addon "><span class="glyphicon glyphicon glyphicon-envelope"></span></span>							
									<?php 
										$input = array(
											'name' => 'email',
											'type' => 'email',
											'value' => $info->email,
											'class' => 'form-control',
										);
										echo form_input($input);
									?>
								</div>	
							</div>
							<div class="col-md-8">
								<?php echo form_error('email'); ?>
							</div>
						</div><br>					
					<?php endforeach ?>
					<?php foreach ($mobile as $cp): ?>
						<div class="row">
							<div class="col-md-4">
								<div class="input-group input-group-sm">
									<span class="input-group-addon "><i class="fa fa-mobile fa-lg"></i></span>
									<?php 
										$input = array(
											'name' => 'mobile',
											'value' => $cp->contact_no,
											'class' => 'form-control',
										);
										echo form_input($input);
									?>
								</div>	
							</div>
					<?php endforeach ?>
							<div class="col-md-8">
								<?php echo form_error('mobile'); ?>
							</div>
						</div><br>
					<?php foreach ($telephone as $phone): ?>
						<div class="row">
							<div class="col-md-4">
								<div class="input-group input-group-sm">
									<span class="input-group-addon "><span class="glyphicon glyphicon glyphicon glyphicon-phone-alt"></span></span>
									<?php 
										$input = array(
											'name' => 'telephone',
											'value' => $phone->contact_no,
											'class' => 'form-control',
										);
										echo form_input($input);
									?>	
								</div>
							</div>
							<div class="col-md-8">
								<br><br>
								<?php echo form_error('telephone'); ?>
							</div>
						</div><br><br>
					<?php endforeach ?>
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary btn-xs">Submit</button>
						</div>
					</div>
					</div><?php echo form_close();?>
				</div>	
			</div>			
		</div>
	</div>
</div>
<!-- Footer -->
<?php $this->load->view('dashboard/includes/footer');?>
