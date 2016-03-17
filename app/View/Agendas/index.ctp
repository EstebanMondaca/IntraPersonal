<div class='index'>

<H3>Listado de la Agenda raiz de agendas</H3>

	<?php echo $this->Html->link('Agregar Persona',array('action'=>'add')) 
	?>

<table>
		<tr>
			<th><?php echo $this->Paginator->sort('id')?></th>
			<th><?php echo $this->Paginator->sort('nombre')?></th>
			<th><?php echo $this->Paginator->sort('apellido')?></th>
			<th><?php echo $this->Paginator->sort('area')?></th>
			<th><?php echo $this->Paginator->sort('anexo')?></th>
			<th><?php echo $this->Paginator->sort('correo')?></th>
			<th><?php echo $this->Paginator->sort('cargo')?></th>
			
			
			<th>Acciones</th>
		</tr>
<?php foreach ($agendas as $key => $value) { ?>
	<tr>
			<td> <?php echo $value['Agenda']['id'];?> </td>
			<td> <?php echo $value['Agenda']['nombre'];?></td>
			<td> <?php echo $value['Agenda']['apellido'];?></td>
			<td> <?php echo $value['Area']['nombre'];?>	</td>
			<td> <?php echo $value['Agenda']['anexo'];?>	</td>
			<td> <?php echo $value['Agenda']['correo'];?>	</td>
			<td> <?php echo $value['Agenda']['cargo'];?>	</td>
			
			<td> 
				<?php echo $this->Html->link('Editar', array('action'=>'edit',$value['Agenda']['id'])); 
				?></br>

				<?php echo $this->Html->link('Ver Detalle de '.$value['Area']['nombre'],
					array('controller'=>'areas',
					'action' => 'view', $value['Area']['id'])); ?></br>

				<?php echo $this->Form->postLink(' Eliminar', 
					array('action'=>'delete', $value['Agenda']['id']),
					array('confirm'=>'Realmente quiere eliminar a' . $value['Agenda']['nombre']. '?' )
					);
				?></br>
			</td>
	</tr>	

<?php } ?>
</table>

<div class ="paging">
	<?php echo $this->Paginator->prev('< anterior',array(),null,array('class'=>'prev disabled'));?>
	<?php echo $this->Paginator->numbers(array('separator' => '')); ?>
	<?php echo $this->Paginator->next('siguiente >', array(),null,array('class'=>'next disabled')); ?>
</div>	
</div>	