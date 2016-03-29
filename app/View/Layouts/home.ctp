
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
        <td width="370" align="left" valign="middle"><?php echo $this->Html->image('logo_chv.png', array('alt' => '','class'=>'logo','url' => array('controller' => 'pages', 'action' => 'index')));?></td>
      </tr>
    </table></td>
  </tr>
</table>
 <p><br />
 </p>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
	<div id="container">
		<div id="content">
			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
			
		</div>
	</div>
	
</body>
</html>
