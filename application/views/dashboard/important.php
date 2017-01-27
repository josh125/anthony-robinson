<!-- Header -->
<?php $this->load->view('dashboard/includes/header');?>
<!-- Nav -->
<?php $this->load->view('dashboard/includes/nav');?>

<div class="container-fluid">
	<div class="row">
    <?php $this->load->view('dashboard/includes/users');?>
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4">
              <h1 class="text-left"><small><i class="fa fa-users fa-fw"></i> Inquiries</small></h1>
            </div><br>
            <div class="col-md-8">
              <ul class="nav nav-tabs" role="tablist">
                <li><a href="<?php echo site_url();?>manage/dashboard"><i class="fa fa-dropbox fa-fw fa-1x blue"></i> All inquiries</a></li>
                <li class="active"><a href="<?php echo site_url();?>manage/important"><i class="fa fa-star-o fa-fw fa-1x blue"></i> Important</a></li>
                <li><a href="<?php echo site_url();?>manage/trashbin"><i class="fa fa-trash-o fa-fw fa-1x red"></i> Trash Bin</a></li>
              </ul>
            </div>
          </div>
              <div class="row text-center">
                <div class="col-md-12">
                  <center><p class="bg-primary"><?php if($this->session->flashdata('message')){ echo $this->session->flashdata('message'); } ?></p></center>
                </div>
              </div>                 
          <?php if (count($inquiries)): ?><?php foreach ($inquiries as $inq): ?>
            <div class="row">
              <div class="col-md-12 text-right"><i class="fa fa-star fa-fw fa-1x yellow"></i></div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <ul class="nav navbar-right">
                  <a class="dropdown">
                    <a href="" class="dropdown-toggle"  data-toggle="dropdown">
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <i class="fa fa-sort-desc fa-fw fa-lg"></i>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><?php echo anchor('manage/important/return_dash_inq/'.$inq['inq_id'],'<i class="fa fa-dropbox fa-1x fa-fw blue"></i>Return to all inquiries');?></li>
                      <li><?php echo anchor('manage/important/sendtotrashbin/'.$inq['inq_id'],'<i class="fa fa-trash-o fa-1x fa-fw red"></i>Trash Bin');?></li>
                    </ul>
                  </a>
                </ul>              
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-101x col-md-offset-2 col-xs-12">
                    <h3><?php echo $inq['project_inq'];?></h3> 
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-10 col-md-offset-2 col-xs-12">
                    <p>Name : <?php echo $inq['name_inq'];?></p>
                    <p>Contact : <?php echo $inq['contact_inq'];?></p>
                    <p><?php echo $inq['email_inq'];?></p>
                  </div>
                </div> 
              </div>
              <div class="col-md-5"><br><br>
                <div class="row">
                  <div class="col-md-12">
                    <blockquote>
                      <p><?php echo $inq['comment_inq'];?></p>
                    </blockquote>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-right">              
                    <?php 
                      $datestring = "<i class='fa fa-calendar fa-fw'></i> %D %F %d, %Y | <i class='fa fa-clock-o fa-fw'></i> %h:%i%A ";
                      $date = $inq['date_inq'];
                      
                      $unix = mysql_to_unix($date);
                      echo mdate($datestring, $unix);
                    ?>                
                  </div>
                </div>
              </div>
            </div><hr>
          <?php endforeach;?><?php endif;?>
          <!-- Pagination -->
          <center><?php echo $this->pagination->create_links(); ?></center>          
        </div>
      </div>          
    </div>
	</div>
</div>

<!-- Footer -->
<?php $this->load->view('dashboard/includes/footer');?>
