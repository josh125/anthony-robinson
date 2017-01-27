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
					<div class="panel panel-primary">
						<div class="panel-body">
							<div class="row">

								<div class="col-md-9">
									<p>You can only change your password 3 times a amount</p>
									<p>if you need help about your account you can contact us in your <a href="<?php echo base_url();?>manage/dashboard/help">help page</a>.</p>
								</div>
							</div>
						</div>
					</div>
					<?php foreach ($account_info as $info): ?>
						<div class="">
							<p>Your Username : <?php echo $info->username;?></p>
							<a href="<?php echo base_url();?>manage/dashboard/edit_security">Change password</a>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer -->
<?php $this->load->view('dashboard/includes/footer');?>