<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
         <?php
                echo $this->Html->meta(
                    'icon.png',
                    '/home/img/bullet.png',
                    array('type' => 'icon')
                );
           ?>
     <title>UIT Point Reminder</title>
  	 <?= $this->element("css"); ?>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	
	<?= $this->fetch('content') ?>

	<?= $this->element("js"); ?>
</body>

</html>
