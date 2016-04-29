<?php 
	$this->layout= 'home';
	
	App::uses('BaseAuthenticate', 'Controller/Component/Auth');
	
?>




<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="50" align="center" valign="middle" ><table width="400" border="0" cellspacing="1" cellpadding="0">
      <tr>
        <td width="30"><h2> Administrador: </h2> </td>
        <td width="370" align="center" valign="middle"> 
        <?php echo $this->Html->link('Administrar Áreas',array('controller'=>'areas',
          'action' => 'index')); ?> </td>
          <td width="370" align="center" valign="middle"> 
        <?php echo $this->Html->link('Administrar Información',array('controller'=>'agendas',
          'action' => 'index')); ?> </td>
      </tr>
    </table></td>
  </tr>
</table>