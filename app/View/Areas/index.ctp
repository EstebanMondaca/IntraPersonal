<div class='index'>
	<h2>Administrador de áreas</h2>

	<?php echo $this->Html->link('Agregar Area',array('action'=>'add')) 
	?>
	<table>
		<tr>
			<th><?php echo $this->Paginator->sort('id')?></th>
			<th><?php echo $this->Paginator->sort('nombre')?></th>
			<th><?php echo $this->Paginator->sort('cantidad')?></th>
			<th><?php echo $this->Paginator->sort('descripcion')?></th>
			<th>Acciones</th>
		</tr>	

		<?php foreach($areas as $k=>$area): ?>
			<tr>
				<td><?php echo h($area['Area']['id']); ?> </td>
				<td><?php echo h($area['Area']['nombre']); ?> </td>
				<td><?php echo h($area['Area']['cantidad']); ?> </td>
				<td><?php echo h($area['Area']['descripcion']); ?> </td>

				<td>
					<?php echo $this->Html->link('Editar', array('action'=>'edit',h($area['Area']['id'])));?></br>
				
				<?php echo $this->Form->postLink(' Eliminar', 
					array('action'=>'delete', $area['Area']['id']),
					array('confirm'=>'Realmente quiere eliminar a' . $area['Area']['nombre']. '?' )
					);
				?></br>


				</td>
			</tr>

		<?php endforeach; ?>
	</table>	

<p>
	<?php echo $this->Paginator->counter(
		array('format'=>'Pagina {:page} de {:pages}, mostrando {:current} registros de {:count}')

	); ?>
</p>

<div class ="paging">
	<?php echo $this->Paginator->prev('< anterior',array(),null,array('class'=>'prev disabled'));?>
	<?php echo $this->Paginator->numbers(array('separator' => '')); ?>
	<?php echo $this->Paginator->next('siguiente >', array(),null,array('class'=>'next disabled')); ?>
</div>	
</div>