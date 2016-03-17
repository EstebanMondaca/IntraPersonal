<div class="add">
	<?php echo $this->Form->create('Area'); ?>

	<fieldset>	
		<legend> Agregar Area</legend>
		<?php echo $this->Form->input('nombre',array('label'=>'Nombre')); ?>
		<?php echo $this->Form->input('cantidad',array('label'=>'Cantidad')); ?>
		<?php echo $this->Form->input('descripcion',array('label'=>'Descripcion')); ?>

	</fieldset>                    
	<?php echo $this->Form->end('Guardar Area'); ?>
</div>