<?php
// Tabla agendas (plurar y en minusculas)
// Clases Agenda (Singular y en camelCase)
//ActiveRecord
class Area extends AppModel {

	public $displayField = 'nombre';
	public $hashMany = array(
			'Agenda' => array(
					'className' => 'Agenda',
					'foreignKey' => 'area_id',
					'dependent' => 'true'
				)
		);

	public $validate = array(
			'nombre' => array('rule' => 'notEmpty',
				'message' => 'El nombre no puede ser vacio'),
			'apellido' => array(
				'rule' => 'notEmpty'
				)
		);
	
}
?>