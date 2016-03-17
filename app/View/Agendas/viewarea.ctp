<?php 
  $this->layout= 'homeview';
  //echo var_dump($agendas);
?>
 
 <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
   <tr>
     <td colspan="2" class="tipografia3">Resultados de la búsqueda</td>
   </tr>
 </table>
 <p>
    <br />
    <br />
 </p>


<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
<?php foreach ($agendas as $key => $value) { ?>
     <tr>
     </tr>
     <tr>
      <td align="center" valign="top">
        <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="200" height="200" align="right" valign="middle">
            <?php echo $this->Html->image('c001.png', array('alt' => 'CakePHP'));?>
            <br /></td>
          <td height="220" align="center">
            
            <table width="400" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="40" colspan="2" class="resultado1"> <?php echo $value['Agenda']['nombre'].' '.$value['Agenda']['apellido'] ;?> </td>
              </tr>
              <tr>
                <td width="93" height="20"><strong>Cargo</strong></td>
                <td width="307"><?php echo $value['Agenda']['cargo'];?></td>
              </tr>
              <tr>
                <td height="20"><strong>Area</strong></td>
                <td><?php echo $value['Area']['nombre'];?></td>
              </tr>
              <tr>
                <td height="20"><strong>Anexo</strong></td>
                <td><?php echo $value['Agenda']['anexo'];?></td>
              </tr>
              <tr>
                <td height="20"><strong>e-mail</strong></td>
                <td><?php echo $value['Agenda']['correo'];?></td>
              </tr>
              <tr>
                <td height="20"><strong>piso</strong></td>
                <td><?php echo $value['Agenda']['piso'];?></td>
              </tr>
              <tr>
                <td height="20"><strong>cumpleaños</strong></td>
                <td><?php echo $value['Agenda']['fecha_nacimiento'];?></td>
              </tr>
          </table>

        </td>
        </tr>
      </table>
    </td>
    </tr>
<?php } ?>      
</table>

<p>&nbsp;</p>
