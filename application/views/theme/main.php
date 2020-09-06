<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Polling, Polling Appp">
  <noscript>Your browser does not support JavaScript!</noscript>
  <title>iPoll :: <?php echo $page_title; ?></title>
  <?php require_once 'include_top.php';?>
</head>
<body>
	<section id="container">

    <?php require_once 'header.php';?>
    <?php $this->load->view('admin/navigation'); ?>
    <div style="padding:20px;">
      <?php $this->load->view($page_type."/".$page_name); ?>
    </div>
    <?php require_once 'footer.php';?>
	</section>
    <?php require_once 'include_bottom.php';?>
    <?php require_once 'js_files.php'; ?>
	<?php require_once 'modal.php';?>
</body>
</html>