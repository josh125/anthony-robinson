	<!-- header -->
	<?php $this->load->view('includes/header');?>
	<!-- Navbar -->
	<?php $this->load->view('includes/navbar');?>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12 col-xs-12"><br><br>
						<?php echo form_open('manage/manage/send_inquiries');?>
			 				<div class="form-group">
			 					<div class="row">
			 					<label for="name" class="col-md-3 control-label" id="name">Name: </label> 
				 					<div class="col-md-5">
										<input type="text" name="name_inq" class="form-control" id="control-name" placeholder="Your fullname ( Required )"> 
									</div>
									<div class="col-md-4">
										<div class="bg-warning text-center"><?php echo form_error('name');?></div> 
									</div>
			 					</div>
			 				</div>
			 				<div class="form-group">
								<div class="row">
								<label for="email" class="col-md-3 control-label" id="email">Email:</label> 
									<div class="col-md-5">
										<input type="email" name="email_inq" class="form-control" id="email" placeholder="Your Email Address ( Optional )"> 
									</div>
									<div class="col-md-4">
										<?php echo form_error('email');?>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
								<label for="contact" class="col-md-3 control-label" id="contact" >Contact no:</label> 
									<div class="col-md-5">
										<input type="text" name="contact_inq" class="form-control" id="contact" placeholder="Your Contact Number ( Important )"> 
									</div>
									<div class="col-md-4">
										<div class="bg-warning text-center"><?php echo form_error('contact');?></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
								<label for="location" class="col-md-3 control-label" id="location">Preferred project or location:</label> 
									<div class="col-md-5">
										<input type="text" name="project_inq" class="form-control" id="preferred project" placeholder="Preferred project or location"> 
									</div>
									<div class="col-md-4">
										<div class="bg-warning text-center"><?php echo form_error('location');?></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
							<label for="cpmment" class="col-md-3 control-label" id="comment">Comment:</label> 
									<div class="col-md-5">
									<textarea name="comment_inq" class="form-control" rows="6" placeholder="Your comments"></textarea>
									</div>
									<div class="col-md-4">
										<?php echo form_error('comment');?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-md-offset-6">
							        <button type="submit" class="btn btn-primary btn-md">Send</button>
								</div>
							</div>
						<?php echo form_close();?>
					</div>
				</div>
</div><br><br>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
			 <b>Contact Details</b>
			</div>
			<div class="panel-body">
		          <h4><?php foreach ($user_info as $info): ?>
			          <div class="row">
			              <h4><i class="fa fa-female fa-fw col-xs-2"></i><div class="col-xs-10">Ms. <?php echo $info->fullname;?></div></h4><hr>
			          </div>
			          <div class="row">
			              <p><i class="fa fa-envelope-o fa-fw col-xs-2"></i><div class="col-xs-10"><?php echo $info->email;?></div></p>     
			          </div>
			          <?php endforeach?>
		          </h4>
		          <h4>
		          <div class="row">
		            <div class="col-md-12">
		              <?php if(count($mobile)):?> <?php foreach ($mobile as $tele): ?>
		                <p><i class="fa fa-mobile fa-fw"></i> <?php echo $tele['contact_no'];?></p>     
		              <?php endforeach ?><?php endif ?>
		            </div>
		          </div>
		          <div class="row">
		            <div class="col-md-12">
		              <?php if(count($telephone)):?> <?php foreach ($telephone as $phone): ?>
		                <p><i class="fa fa-phone fa-fw"></i> <?php echo $phone['contact_no'];?></p>     
		              <?php endforeach ?><?php endif ?>   
		            </div>
		          </div><br>
				</h4>
			</div>
		</div>			
	</div>
		</div>
	</div>
	<!-- contacta -->
     
	<!-- footer -->
	<?php $this->load->view('includes/footer');?>
