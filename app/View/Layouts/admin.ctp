<?php
/**
 * @copyright     Copyright (c) Anthony Paguaga
 * @package       app.View.Layouts
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
    <?php echo $this->Html->charset(); ?>
    <title>Administrator | <?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <div id="container">
        <div id="header">
            <div class="logo"></div>
            <div class="clear"></div>
        </div>
        <div id="content-wrapper">
            <?php echo $this->fetch('content'); ?>
        </div>
        <div id="footer">
            © <?php echo date("Y");?> - All rights         
    	</div> 
    </div>
</body>
</html>
