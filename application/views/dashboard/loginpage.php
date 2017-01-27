<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css" >
</head>
<body>
<?php
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
  echo time();
?>
<div class="container">
<?php $this->load->view('includes/header'); ?>
  <div class="row">&nbsp;</div>
  <div class="row">&nbsp;</div>
  <div class="row">&nbsp;</div>
  <div class="row">&nbsp;</div>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <center><p class="bg-danger"><?php if($this->session->flashdata('error')){ echo $this->session->flashdata('error'); } ?></p></center>
      <center><p class="bg-danger"><?php echo form_error('password'); ?></p></center>
      <center><p class="bg-danger"><?php echo form_error('username'); ?></p></center>
        <div class="row">
          <div class="col-md-12 text-center">
             <h1><small>Robinson Communities</small> </h1>
          </div>
        </div>
            <div class="row">&nbsp;</div>
          <?php echo form_open('manage/manage/loginAccount');?>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <input class="form-control" type="text" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>">         
              
            </div>
          </div>
          &nbsp;
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
               <input class="form-control" type="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>">    
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-md-12">
              <center>
              <button type="submit" class="btn btn-primary" value="submit">Login</button>
              <a href="<?php echo base_url();?>" class="btn btn-success" value="submit">Cancel</a> 
              </center>
            </div>
          </div>
          <?php echo form_close();?>     
    </div>
  </div>
</div>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript">
        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    </script>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>
</body>
</html>