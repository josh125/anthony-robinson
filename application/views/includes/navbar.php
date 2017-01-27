            <div class="top-line row hidden-sm hidden-xs">
                <div class="col-md-1"></div>
                <ul class="top-socials col-md-5">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/anthony.manansala.14" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>

                <ul class="top-info  col-md-5">
                        <li><a href="#"><i class="fa fa-envelope"></i>manansala_tony@yahoo.com  
                        </a></li>
                        <li><p><i class="fa fa-phone"></i>+63906 645 4644
                        </p></li>
                </ul>
                <div class="col-md-1"></div>
            </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 hidden-xs">
            <div class="navbar-line row">
                <div class="col-md-1"></div>

                <div class="col-md-5"><img class="img-responsive" src="<?php echo base_url();?>image/logo.png"></div>
                <nav class="col-md-5 pull-right">
                    <ul class="nav navbar-nav">
                      <li class="navbar-nav-dec"><a href="<?php echo base_url();?>home">Home</a></li>
                      <li class="navbar-nav-dec"><a href="<?php echo base_url();?>aboutus">About Us</a></li>
                      <li class="navbar-nav-dec"><a href="<?php echo base_url();?>properties">Properties</a></li>
                      <li class="navbar-nav-dec"><a href="<?php echo base_url();?>buyerscorner">Buyer's Corner</a></li>
                    </ul>
                </nav>

                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</div>
<!-- xs code -->

<div class="row">
    <div class="col-xs-12 hidden-md visible-xs"><br>
          <div class="navbar navbar-default navbar-fixed-top" role="navigation">
              <div class="container">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                  </div>
                  <div class="collapse navbar-collapse">
                      <ul class="nav navbar-nav">
                          <li class="navbar-nav-dec"><a href="<?php echo base_url();?>home">Home</a></li>
                          <li class="navbar-nav-dec"><a href="<?php echo base_url();?>aboutus">About Us</a></li>
                          <li class="navbar-nav-dec"><a href="<?php echo base_url();?>properties">Properties</a></li>
                          <li class="navbar-nav-dec"><a href="<?php echo base_url();?>buyerscorner">Buyer's Corner</a></li>
                      </ul>
                  </div><!--/.nav-collapse -->
              </div>
          </div><br><br>
              <center><img class="img-responsive" src="<?php echo base_url();?>image/logo.png"></center><br>
        </div>
    </div>
</div>

<!-- end xs code -->

<div class="modal fade" id="loginModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Login Your Account</h4>
      </div>
      <div class="modal-body">
       <?php echo form_open('manage/manage/loginAccount');?>
         <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <input class="form-control" type="text" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>">         
              
            </div>
          </div>
          &nbsp;
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
               <input class="form-control" type="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>">    
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Login</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
       <?php echo form_close();?>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
