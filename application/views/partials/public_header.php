<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css" media="screen" title="no title" charset="utf-8">
    <title>
        <?php
          echo isset($page_title) ? $page_title : $this->config->item('app_name');
         ?>
    </title>
  </head>
  <body>

    <?php
    if(isset($APP_TOP_NAV)){
      $this->load->view($APP_TOP_NAV);
    }
     ?>
  <div class="container-fluid">
