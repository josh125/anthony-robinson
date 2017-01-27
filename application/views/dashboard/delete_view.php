<!-- Header -->
<?php $this->load->view('dashboard/includes/header');?>
<!-- Nav -->
<?php $this->load->view('dashboard/includes/nav');?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php if (count($blogs)): ?><?php foreach ($blogs as $blog): ?>
			<div class="row"><br>
				<div class="col-md-12 text-center visible-xs">
					<p>Are you sure you want to delete this blog?</p>
					<?php echo form_open('manage/dashboard/submit_delete');?>
					<button type="submit" class="btn btn-danger btn-xs">Delete</button>
					<a href="<?php echo site_url();?>manage/dashboard/blogs" class="btn btn-success btn-xs">Cancel</a>
				</div>
			</div>				
				<br><img src="<?php echo site_url();?>image/blog_img/<?php echo $blog->blog_img;?>" class="img-responsive">
		</div>
		<div class="col-md-4">
			<h1><small><?php echo $blog->blog_title ?></small></h1>
			<blockquote>
				<?php echo $blog->blog_content;?>
			</blockquote>
			<div class="row">
		      <div class="col-md-12 text-right">              
		        <?php 
		          $datestring = "<i class='fa fa-calendar fa-fw'></i> %D %F %d, %Y | <i class='fa fa-clock-o fa-fw'></i> %h:%i%A ";
		          $date = $blog->blog_date_posted;
		          
		          $unix = mysql_to_unix($date);
		          echo mdate($datestring, $unix);
		        ?>                
		      </div>
			</div>
			<input type="hidden" value="<?php echo $blog->blog_id;?>" name="blog_id"/>
			<div class="row"><br><br><br>
				<div class="col-md-12 text-right hidden-xs">
					<p>Are you sure you want to delete this blog?</p>
					<button type="submit" class="btn btn-danger btn-xs">Delete</button>
					<a href="<?php echo site_url();?>manage/dashboard/blogs" class="btn btn-success btn-xs">Cancel</a>
				</div>
			</div>
			<?php echo form_close();?>
		</div>
			<?php endforeach ?><?php endif ?>
	</div>
</div>

<!-- Footer -->
<?php $this->load->view('dashboard/includes/footer');?>