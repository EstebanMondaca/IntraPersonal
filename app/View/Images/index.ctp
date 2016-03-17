<div class='index'>
	<h2>Areas</h2>
	<table>
		<tr>
			<th><?php echo $this->Paginator->sort('id')?></th>
			<th><?php echo $this->Paginator->sort('filename')?></th>
			<th><?php echo $this->Paginator->sort('dir')?></th>
			<th><?php echo $this->Paginator->sort('mimetype')?></th>
			<th>Acciones</th>
		</tr>	

		<?php foreach($areas as $k=>$area): ?>
			<tr>
				<td><?php echo h($area['Image']['id']); ?> </td>
				<td><?php echo h($area['Image']['filename']); ?> </td>
				<td><?php echo h($area['Image']['dir']); ?> </td>
				<td><?php echo h($area['Image']['mimetype']); ?> </td>

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