<h3>Editar Area</h3>
<div class='index'>
<?php
	echo $this->Form->create('Area', array('action' => 'edit'));
	
	echo $this->Form->input('nombre',array('label'=>'Nombre'));

	echo $this->Form->input('cantidad',array('label'=>'Cantidad','type'=> 'number'));

	echo $this->Form->input('descripcion',array('label'=>'Descripcion'));
	
	echo $this->Form->input('id', array('type'=>'hidden'));
	echo $this->Form->end('Guardada Area!!');

?>
</div>