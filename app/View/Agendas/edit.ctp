<h3>Editar Persona</h3>

<?php
	echo $this->Form->create('Agenda',array('type'=>'file'));
	echo $this->Form->input('nombre',array('label'=>'Nombre'));
	echo $this->Form->input('apellido',array('label'=>'Apellidos'));
	echo $this->Form->input('anexo',array('label'=>'Anexo','type'=> 'text'));
	echo $this->Form->input('area_id',array('label'=>'Area'));
	echo $this->Form->input('fecha_nacimiento',array(
		'label'=>'Fecha de Nacimiento',
		'type' => 'date',
		'dateFormat' => 'DMY',
		'minYear' => date('Y') - 70,
		'maxYear' => date('Y')));
	echo $this->Form->input('rut',array('label'=>'RUT'));
	echo $this->Form->input('sexo', array(
		'options'=>array(
			'M' => 'Masculino',
			'F'=>'Femenino'),
		'empty' =>'(Seleccione)'));
	echo $this->Form->input('fecha_ingreso',array(
		'label'=>'Fecha de Ingreso',
		'type' => 'date',
		'dateFormat' => 'DMY',
		'minYear' => date('Y') - 70,
		'maxYear' => date('Y')));
	echo $this->Form->input('cargo',array('label'=>'Cargo'));
	echo $this->Form->input('imagen_nombre',array('type'=>'file'));
	echo $this->Form->input('correo');
	echo $this->Form->input('piso', array(
		'options'=>array(
			'piso 8' => 'Piso 8',
			'piso 14'=>'Piso 14'),
		'empty' =>'(Seleccione)'));
	echo $this->Form->input('id', array('type'=>'hidden'));
	
	echo $this->Form->end('Guardada Persona!!');
?>
