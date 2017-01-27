<!-- Header -->
<?php $this->load->view('dashboard/includes/header');?>
<!-- Nav -->
<?php $this->load->view('dashboard/includes/nav');?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 hidden-xs">
			<div class="panel panel-default">
				<div class="panel-body">
					<h1>Sidebar</h1>
				</div>
			</div>
		</div>
		<div class="col-md-9 text-left">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<h1><small>Blog Post<a href="<?php echo base_url('manage/dashboard/addblogviews');?>" data-toggle="modal" data-target="#blogModal" class="btn btn-link btn-xs"> <i class="fa fa-plus-square fa-2x fa-fw"></i></a></small></h1>
						</div>
					</div><hr>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<center><p class="bg-primary"><?php if($this->session->flashdata('message')){ echo $this->session->flashdata('message'); } ?></p></center>
								</div>
							</div>
							<?php if (count($blogs)):?><?php foreach ($blogs as $blog): ?>
								<div class="row">
									<div class="col-md-6">
										<img src="<?php echo base_url();?>image/blog_img/<?php echo $blog['blog_img'];?>" class="img-responsive">
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-11">
												<h3><?php echo $blog['blog_title'];?></h3>
											</div>
											<div class="col-md-1">
						                      <div class="row">
						                        <div class="col-md-12">
						                          <ul class="nav navbar-right">
						                            <a class="dropdown">
						                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
						                              <div class="row">
						                                <div class="col-md-12 text-left">
						                                  <i class="fa fa-sort-desc fa-fw fa-lg"></i>
						                                </div>
						                              </div>
						                              </a>
						                                <ul class="dropdown-menu">
						                                 <li><a href="<?php echo base_url('manage/dashboard/addblogviews');?>" data-toggle="modal" data-target="#blogModal"><i class="fa fa-plus fa-fw"></i>Add Blog</a></li>
						                                 <li><?php echo anchor('manage/dashboard/editBlog/'.$blog['blog_id'],'<i class="fa fa-pencil fa-fw"></i>Edit');?></li>
						                                 <li><?php echo anchor('manage/dashboard/deleteBlog/'.$blog['blog_id'],'<i class="fa fa-trash-o fa-fw"></i>Delete');?></li>
						                                 <li><?php echo anchor('manage/dashboard/hideBlog/'.$blog['blog_id'],'<i class="fa fa-mail-forward fa-fw"></i>Hide');?></li>
						                                 <li><?php echo anchor('manage/dashboard/showBlog/'.$blog['blog_id'],'<i class="fa fa-mail-reply fa-fw"></i>Unhide');?></li>
						                                </ul>
						                            </a>
						                          </ul>
						                        </div>
						                      </div>									
											</div>
										</div>
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
										<div class="row">
											<div class="col-md-12 text-right">
												<p class="label label-success"><?php echo $blog['blog_hide_unhide'];?></p>												
											</div>
										</div>
									</div>
								</div><hr>
							<?php endforeach ?><?php endif ?>
						</div>
         			 <center><?php echo $this->pagination->create_links(); ?></center>
					</div>


					<div class="row">
						<div class="col-md-12">
							<!-- Modal -->
							<div class="modal fade" id="blogModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							        <h4 class="modal-title" id="myModalLabel">What's on your mind?</h4>
							      </div>
							      <div class="modal-body">
							      <?php
							      	$attr = array(
							      		'class'=>'form-horizontal',
							      		'role'=>'form',
							      	);
							       echo form_open_multipart('manage/dashboard/submit_blog',$attr);?>
							      	<div class="form-group">
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
							      	<?php 
							      		$input = array(
							      			'name'=> 'userfile',
							      		);
							      		echo form_upload($input);
							      	?>
							      	</div>							      								      								      	
							        <button type="submit" class="btn btn-primary btn-sm">Post</button>
							      </div>
							      <?php echo form_close();?>
							    </div>
							  </div>
							</div>
							<!-- End Modal -->							
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>
<!-- Footer -->
<?php $this->load->view('dashboard/includes/footer');?>