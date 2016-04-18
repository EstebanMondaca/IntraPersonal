<?php 
	$this->layout= 'home';
	$areas = $this->requestAction('areas/index');
?>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="50" align="center" valign="middle" ><table width="400" border="0" cellspacing="1" cellpadding="0">
      <tr>
        <td width="30">&nbsp;</td>
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
 <p> </p>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
   <tr>

  </tr>
  <tr>
    <td align="center" valign="top"><br />
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" align="left" valign="middle" class="tipografia3">Buscar</td>
        </tr>
      </table>
      <br />
      <br />
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="140" align="center">
			<?php echo $this->Html->image("piso8_100.png", array(
   				 "alt" => "",
  				  'url' => array('controller' => 'agendas', 'action' => 'view', 'piso 8')));?>
          	<br />
          </td>
          	<td align="center">
          	<?php echo $this->Html->image("piso14_100.png", array(
   				 "alt" => "",
  				  'url' => array('controller' => 'agendas', 'action' => 'view', 'piso 14')));
  			?><br />
  			</td>
          <td align="center">
          	<?php echo $this->Html->image("todos_00.png", array(
   				 "alt" => "",
  				  'url' => array('controller' => 'agendas', 'action' => 'view', '')));
  			?>
          	<br /></td>
        </tr>
        <tr>
          <td align="center"><span class="tipografia2"><?php echo $this->Html->link('Los Colaboradores del Piso 8',array('controller'=>'agendas',
					'action' => 'view','piso 8')); ?> <br />
            </span></td>
          <td align="center"><span class="tipografia2"><?php echo $this->Html->link('Los Colaboradores del Piso 14',array('controller'=>'agendas',
					'action' => 'view','piso 14')); ?><br />
            </span></td>
          <td align="center"><span class="tipografia2"> <?php echo $this->Html->link('Todos los Colaboradores',array('controller'=>'agendas',
					'action' => 'view')); ?> 
			</span></td>
        </tr>
      </table>
      <br />
      <br />
      <table width="600" border="0" cellspacing="1" cellpadding="0">
        <tr>
          <td height="15" class="fondodot">&nbsp;</td>
        </tr>
      </table>
      <br />
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="2" align="left" valign="middle" class="tipografia3">Ver por area</td>
        </tr>
      </table>
      <br />
      <br />
      <br />
  <table width="670" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td align="left"><table width="600" border="0" align="right" cellpadding="0" cellspacing="0"></td>
      </tr>  
 <?php foreach($areas as $k=>$area): ?>	
  	<tr>
          <td width="35" height="15" align="left" valign="middle">&nbsp;</td>
          <td height="15" align="left" valign="middle">&nbsp;</td>
          <td width="35" height="15" align="left">&nbsp;</td>
          <td width="265" height="15" align="left">&nbsp;</td>
    </tr>	
	<tr>			
          <td width="35" align="left" valign="middle"><span class="tipografia4"><img src="img/lista.png" alt="" width="25" height="25" /></span><br />&nbsp;</td>
          <td width="265" align="left" valign="middle"><span class="tipografia4"><a href="#">
          	<?php echo $this->Html->link( h($area['Area']['nombre']),array('controller'=>'agendas',
					'action' => 'viewarea',h($area['Area']['id']))); ?> <br />
          </a></span>&nbsp;</td>
	</tr>
<?php endforeach; ?>
          
        
      
      </table></td>
    </tr>
  </table>
  <br />
      <br />
      <br />
      <table width="600" border="0" cellspacing="1" cellpadding="0">
        <tr>
          <td height="15" class="fondodot">&nbsp;</td>
        </tr>
      </table>
      <br />
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="2" align="left" valign="middle" class="tipografia3">Busqueda avanzada</td>
        </tr>
      </table>
      <br />
      <br />
      <br />
      <form id="form1" name="form1" method="post" action="">
        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="195" height="140" align="center" valign="top"><img src="img/avanzada100.png" alt="" width="125" height="125" /><br /></td>
            <td width="405" height="200" align="center"><table width="90%" border="0" cellpadding="0" cellspacing="0" class="tipografia">
              <tr>
                <td width="18%" align="left" valign="middle">nombre</td>
                <td height="35" colspan="3"><label for="nombre3"></label>
                  <input name="nombre" type="text" id="nombre3" size="27" /></td>
                </tr>
              <tr>
                <td align="left" valign="middle">anexo</td>
                <td width="26%" height="35"><label for="anexo"></label>
                  <input name="anexo" type="text" id="anexo" size="4" maxlength="3" /></td>
                <td width="12%" align="left" valign="middle">piso</td>
                <td width="44%"><label for="piso"></label>
                  <select name="piso" id="piso">
                    <option>ambos</option>
                    <option>8</option>
                    <option>14</option>
                  </select></td>
                </tr>
              <tr>
                <td align="left" valign="middle">correo</td>
                <td height="35" colspan="3"><label for="e-mail"></label>
                  <input name="e-mail" type="text" id="e-mail" size="27" /></td>
                </tr>
              <tr>
                <td align="left" valign="middle">area</td>
                <td height="35" colspan="3"><label for="area"></label>
                  <label for="area"></label>
                  <select name="area" id="area">
                    <option>Todas</option>
                    <option>Comunicación y gabinete</option>
                    <option>Relaciones institucionales</option>
                    <option>Fiscalía</option>
                    <option>Competencias laborales</option>
                    <option>Centros y evaluación</option>
                    <option>Estudios e información</option>
                    <option>Planificación y control de gestión</option>
                    <option>Administración y finanzas</option>
                  </select></td>
                </tr>
              </table>
              <br />
              <input name="Submit" type="submit" class="boton" id="Submit" value="Buscar Ahora" />
            <br /></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
        </table>
      </form>
      <br />
      <br /></td>
   </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
