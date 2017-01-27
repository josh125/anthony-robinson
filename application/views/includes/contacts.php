<div class="panel panel-default">
	<div class="panel-heading">
	 <b>Contact Details</b>
	</div>
	<div class="panel-body">
          <h4>
          	<?php foreach($user_info as $user):?>
          <div class="row">
            <div class="col-md-11 col-xs-12 col-md-offset-1">
              <h4><i class="fa fa-male fa-fw"></i><?php echo $user->fullname;?></h4><hr>
            </div>
          </div>
          <div class="row">
            <div class="col-md-11 col-xs-12 col-md-offset-1">
              <p><i class="fa fa-envelope-o fa-fw"></i><?php echo $user->email;?></p><hr> 
            </div>
          </div>
          </h4>
          <h4>
          <div class="row">
            <div class="col-md-11 col-xs-12 col-md-offset-1">
                <p><i class="fa fa-mobile fa-fw"></i><?php echo $user->cellphone;?></p>     
            </div>
          </div><br>
          <div class="row text-center">
          	<div class="col-md-12">
				<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
				 <i class="fa fa-envelope fa-lg fa-fw"></i> Send me a Message
				</button>
          	</div>
          </div>
      <?php endforeach;?>
		<!-- Button trigger modal -->
		</h4>
	</div>
</div>
<div class="row">
	<div class="col-md-12 col-xs-12">
		<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
			      </div>
			      <div class="modal-body">
			      		<?php echo form_open('manage/manage/send_inquiries');?>
			 				<div class="form-group">
			 					<label for="name" class="col-md-6 control-label" id="name">Name: </label> 
			 					<div class="row">
				 					<div class="col-lg-12">
										<input type="text" name="name" class="form-control" id="control-name" required placeholder="Your fullname ( Required )"> 
									</div>
			 					</div>
			 				</div>
			 				<div class="form-group">
								<label for="email" class="col-lg-6 control-label" id="email">Email:</label> 
								<div class="row">
									<div class="col-lg-12">
										<input type="email" name="email" class="form-control" id="email" required placeholder="Your Email Address ( Optional )"> 
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="contact" class="col-lg-6 control-label" id="contact" >Contact no:</label> 
								<div class="row">
									<div class="col-lg-12">
										<input type="text" name="contact" class="form-control" id="contact" required placeholder="Your Contact Number ( Important )"> 
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="location" class="col-lg-12 control-label" id="location">Preferred project or location:</label> 
								<div class="row">
									<div class="col-lg-12">
										<input type="text" name="location" class="form-control" id="preferred project" required placeholder="Preferred project or location"> 
									</div>
								</div>
							</div>
							<div class="form-group">
							<label for="cpmment" class="col-lg-6 control-label" id="comment">Comment:</label> 
								<div class="row">
									<div class="col-lg-12">
									<textarea name="comment" class="form-control" required rows="6" placeholder="Your comments"></textarea>
									</div>
								</div>
							</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Send</button>
			      </div>
			    </div>
			  </div>
			</div>
			<?php echo form_close();?>
	</div>
</div>

