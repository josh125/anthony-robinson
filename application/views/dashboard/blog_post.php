<!-- Header -->
<?php $this->load->view('dashboard/includes/header');?>
<!-- Nav -->
<?php $this->load->view('dashboard/includes/nav');?>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			</div>
		<div class="col-md-9 text-left">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							      <?php echo form_open_multipart('manage/dashboard/submit_blog');?>
							      	<div class="form-group">
							      	<label><?php echo form_error('title');?></label>
							      	<?php 
							      		$input = array(
							      			'class'=>'form-control',
							      			'value'=> set_value('title'),
							      			'name'=> 'title',
							      			'placeholder'=>'Blog Title',
							      		);
							      		echo form_input($input);
							      	?>
							      	</div>
							      	<div class="form-group">
							      	<label><?php echo form_error('content');?></label>
							      	<?php 
							      		$input = array(
							      			'class'=>'form-control',
							      			'value'=> set_value('content'),
							      			'name'=> 'content',
							      			'placeholder'=>'Say something...',
							      		);
							      		echo form_textarea($input);
							      	?>
							      	</div>
							      	<div class="form-group">
							      	<label><?php echo $error;?></label>
							      	<?php 
							      		$input = array(
							      			'name'=> 'userfile',
							      		);
							      		echo form_upload($input);
							      	?>
							      	</div>							      								      								      	
							        <button type="submit" class="btn btn-primary btn-sm">Post</button>
							      <?php echo form_close();?>
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