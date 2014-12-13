<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.6, minimal-ui, user-scalable=yes">
    <title>SORBET</title>
    <link href="<?=base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/css/sorbet.css" rel="stylesheet"> 
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      var config = {
           base: "<?php echo base_url(); ?>"
       };
     </script>

      <?php 
    if(isset($additionalstyles))
    {
      foreach($additionalstyles as $style):
        ?>

        <link href="<?=base_url() ?>assets/css/<?=$style ?>" rel="stylesheet">

        <?php

      endforeach;

    } ?>
  </head>
  <body>