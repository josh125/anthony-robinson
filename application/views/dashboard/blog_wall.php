	<!-- header -->
	<?php $this->load->view('includes/header');?>
	<!-- Navbar -->
	<?php $this->load->view('includes/navbar');?>
	<div class="container">
		<?php if (count($blogs)):?><?php foreach ($blogs as $blog): ?>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<img src="<?php echo base_url();?>image/blog_img/<?php echo $blog['blog_img'];?>" class="img-responsive">
						</div><br>
						<div class="col-md-6">
							<h3><a href="<?php echo site_url('manage/blog_wall');?>"><?php echo $blog['blog_title'];?></a></h3>
							<blockquote>
								<p><small><?php echo $blog['blog_content'];?></small></p>
							</blockquote>
							<div class="row">
			                  <div class="col-md-12 text-right">              
			                    <?php 
			                      $datestring = "<i class='fa fa-calendar fa-fw'></i> %D %F %d, %Y | <i class='fa fa-clock-o fa-fw'></i> %h:%i%A ";
			                      $date = $blog['blog_date_posted'];
			                      
			                      $unix = mysql_to_unix($date);
			                      echo mdate($datestring, $unix);
			                    ?>                
			                  </div>
							</div>
						</div>
					</div><hr><br><br>
				</div>
			</div>
		<?php endforeach ?><?php endif ?>
	</div>
	<!-- footer -->
	<?php $this->load->view('includes/footer');?>
