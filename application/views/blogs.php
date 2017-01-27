 <?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>
   <div class="container">
        <div class="row">
            <div class="col-md-12"><br>
                 <center><h3><b>Blogs</b></h3></center>
                <div class="main-border"></div>

                <div class="row">
                    <div class="col-md-8">
                        <?php foreach($blogs as $blog):?>
                        <h3><a class="link-color" href="#"><?php echo $blog['blog_title'];?></a></h3>
                       <div class="row">
                            <div class="col-md-5">
                            <img src="<?php echo base_url();?>image/blog_img/<?php echo $blog['blog_img'];?>" class="img-responsive">
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                <div class="col-md-4"></div>
                                    <div class="col-md-8 text-right"> 
                                    <?php 
                                  $datestring = "<i class='fa fa-calendar fa-fw'></i> %D %F %d, %Y ";
                                  $date = $blog['blog_date_posted'];
                                  
                                  $unix = mysql_to_unix($date);
                                  echo mdate($datestring, $unix);
                                ?>                         
                                  </div>
                                </div><br>
                            <blockquote><p class="justify-align-text"><?php echo $blog['blog_content'];?></p></blockquote>
                            
                            </div>
                        </div><br><br>
                    <?php endforeach?>
                     
                    </div><br>
                    <div class="col-md-4">
                        <?php $this->load->view('includes/contacts');?>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
<?php $this->load->view('includes/footer');?>