<!-- Header -->
<?php $this->load->view('dashboard/includes/header');?>
<!-- Nav -->
<?php $this->load->view('dashboard/includes/nav');?>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-body">
				<?php echo form_open_multipart('manage/dashboard/edit_blog_submit');?>
				<?php if (count($blog_item)): ?><?php foreach ($blog_item as $blog): ?>
					<div class="row">
						<div class="col-md-2"><label class="fa fa-fw fa-2x">Title</label></div>
						<div class="col-md-5">
							<?php 
							$title = array(
								'class'=>'form-control',
								'value'=>$blog->blog_title,
								'name'=>'title',
							);
							echo form_input($title);
							?>
						</div>
						<div class="col-md-5"><?php echo form_error('title');?></div>
					</div><br>
					<div class="row">
						<div class="col-md-10">
						<input type="hidden" name="blog_id" value="<?php echo $blog->blog_id;?>" />
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-2"><?php echo form_error('content');?></div>
					</div>				
					<div class="row">
						<div class="col-md-2"><label class="fa fa-fw fa-2x">Content</label></div>
						<div class="col-md-4">
							<?php 
							$content = array(
								'class'=>'form-control',
								'value'=>$blog->blog_content,
								'name'=>'content',
							);
							echo form_textarea($content);
							?>
						</div><br>
						<div class="col-md-6">
							<img src="<?php echo site_url();?>image/blog_img/<?php echo $blog->blog_img;?>" class="img-responsive">
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-2 col-md-offset-6"><label class="fa fa-fw fa-2x">Image</label></div>
						<div class="col-md-4">
							<?php 
							$img = array(
								'name'=>'userfile',
							);
							echo form_upload($img);
							?>
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-12 text-right">
							<?php 
							$submit = array(
								'class'=>'btn btn-primary btn-sm',
								'name'=>'submit',
								'value'=>'Submit'
							);
							echo form_submit($submit);
							?>
						</div>
					</div>
				<?php endforeach ?><?php endif ?>
				<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer -->
<?php $this->load->view('dashboard/includes/footer');?>
