<?php
// Tabla agendas (plurar y en minusculas)
// Clases Agenda (Singular y en camelCase)
//ActiveRecord
class Agenda extends AppModel {

	//public $displayField = 'nombre';

	public $belongsTo = array(
			'Area' => array(
					'className' => 'Area',
					'foreignKey' => 'area_id'
				)
		);

// esta causando error el validate
	public $validate = array(
			'nombre' => array('rule' => 'notBlank'),
			'apellido' => array('rule' => 'notBlank')
		);


}
