<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width,initial-scale= 1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/cssmain.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
</head>
<body>
<?php
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
  echo time();
?>