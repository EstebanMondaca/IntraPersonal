
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('busqueda','home'));
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	  <tr>
	    <td height="100" align="left" valign="middle" bgcolor="#A6CE39">
	    <table width="400" border="0" cellspacing="1" cellpadding="0">
	      <tr>
	        <td width="30">&nbsp;</td>
	        <td width="370" align="left" valign="middle">
	        	<?php echo $this->Html->image('logo_chv.png', array('alt' => '','url' => array('controller' => 'pages', 'action' => 'index')));?>
	      </tr>
	    </table>
	</td>
	</tr>

</table>
	<div id="container">
		
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

	</div>

</body>
</html>
