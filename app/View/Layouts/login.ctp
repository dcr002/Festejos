<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
                
                #CSS
                echo $this->Html->css('bootstrap.min');
                echo $this->Html->css('plugins/metisMenu/metisMenu.min');
                echo $this->Html->css('plugins/timeline');
                echo $this->Html->css('sb-admin-2');
                //echo $this->Html->css('plugins/morris');
                echo $this->Html->css('font-awesome-4.1.0/css/font-awesome.min');
                
                #JavaScripts
                echo $this->Html->script('jquery-1.11.0');
                echo $this->Html->script('bootstrap.min');
                echo $this->Html->script('plugins/metisMenu/metisMenu.min');
                echo $this->Html->script('plugins/morris/raphael.min');
                //echo $this->Html->script('plugins/morris/morris.min');
                //echo $this->Html->script('plugins/morris/morris-data');
                echo $this->Html->script('sb-admin-2');
                echo $this->Html->script('plugins/dataTables/jquery.dataTables');
                echo $this->Html->script('plugins/dataTables/dataTables.bootstrap');
	?>
</head>
    <body>
        <div class="container">
            <?php echo $this->fetch('content'); ?>
        </div>
    </body>
</html>