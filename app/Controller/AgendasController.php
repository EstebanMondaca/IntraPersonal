<?php

App::uses('AppController', 'Controller');


class AgendasController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Session');

	public $paginate = array(
		'limit' => 10,
		'order' => array('Agenda.id' => 'asc')
		);

	public function noPaginar()
 	{
        $this->paginate['limit'] = null;
    }


    public function beforeFilter() {
        parent::beforeFilter(); 
        $this->Auth->allow('index', 'view','viewarea');
    }

	public function index() {

	
		$this->Agenda->recursive = 0;
		// $params = array('order' => 'name desc');
		$agendas = $this->paginate();
		if($this->request->is('request')):
			return $agendas;
		else:
			$this->set('agendas',$agendas);
		endif;

		//$this->set('agendas', $this->Agenda->find('all'));
		// buscar id 2
		// this ->set('agendas',$this->Agenda->findByID(2));
	}

	public function add() {
		if($this->request->is('post')):

		

			if ($this->request->data['Agenda']['imagen_nombre']){
				$file = new File($this->request->data['Agenda']['imagen_nombre']['tmp_name'], true, 0644);
				$path_parts = pathinfo($this->data['Agenda']['imagen_nombre']['name']);
				$ext = $path_parts['extension'];

				if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png') {
					$this->Session->setFlash('Solo puedes subir imagenes.');
					$this->render();
				} else {
					$date = $this->data['Agenda']['imagen_nombre']['name'];
					$filename =$date;
					
					$data = $file->read();
					$file->close();
					
					$file = new File(WWW_ROOT.'/img/'.$filename,true);
					$file->write($data);
					$file->close();
				}

			}
			//Fin subir imagenes

			//	debug($this->request);

			$this->request->data['Agenda']['imagen_nombre'] = $this->request->data['Agenda']['imagen_nombre']['name'];
			$this->Agenda->create();
			if($this->Agenda->save($this->request->data)) {
				$this->Session->setFlash(__('La persona se ah guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
			}
	 		
			
		endif;

		$areas = $this->Agenda->Area->find('list');
		$agendas = $this->Agenda->find('list');
		$this->set(compact('agendas','areas'));
	}

	public function edit($id = null){
		$this->Agenda->id = $id;
		
		if ($this->request->is('get')) {
			$this->request->data = $this->Agenda->read();
			
		}
		else { //si no es get

			//Fin subir imagenes
			if ($this->request->data['Agenda']['imagen_nombre']){
				$file = new File($this->request->data['Agenda']['imagen_nombre']['tmp_name'], true, 0644);
				$path_parts = pathinfo($this->data['Agenda']['imagen_nombre']['name']);
				$ext = $path_parts['extension'];

				if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png') {
					$this->Session->setFlash('Solo puedes subir imagenes.');
					$this->render();
				} else {
					$date = $this->data['Agenda']['imagen_nombre']['name'];
					$filename =$date;
					
					$data = $file->read();
					$file->close();
					
					$file = new File(WWW_ROOT.'/img/foto/'.$filename,true);
					$file->write($data);
					$file->close();
				}
			}

			$this->request->data = array('id' => $id,
										'nombre'=> $this->data['Agenda']['nombre'],
										'apellido'=> $this->data['Agenda']['apellido'],
										'anexo'=> $this->data['Agenda']['anexo'],
										'area_id'=> $this->data['Agenda']['area_id'],
										'fecha_nacimiento'=> $this->data['Agenda']['fecha_nacimiento'],
										'rut'=> $this->data['Agenda']['rut'],
										'sexo'=> $this->data['Agenda']['sexo'],
										'fecha_ingreso'=> $this->data['Agenda']['fecha_ingreso'],
										'cargo'=> $this->data['Agenda']['cargo'],
										'piso'=> $this->data['Agenda']['piso'],
										'correo'=> $this->data['Agenda']['correo'],
										'imagen_nombre'=> $this->data['Agenda']['imagen_nombre']['name'],
									);
			if ($this->Agenda->save($this->request->data)) 
			{
				//debug($this->request->data);
				//exit();
				$this->Session->setFlash('Persona Guardada');
				$this->redirect(array('action' => 'index' ));
			}
			else{
				$this->Session->setFlash('No se pudo guardar');
			}
			
		}

	
	

	$areas = $this->Agenda->Area->find('list');
	$agenda = $this->Agenda->find('list');
	$this->set(compact('agendas','areas'));
	
	}

	public function view($condicion = null){

		$this->noPaginar();

		if (is_null($condicion)) {
			$this->Agenda->recursive = 0;
			$params = array('order' => 'name desc');
			$this->set('agendas', $this->Agenda->find('all'));

		}
		else{
			$params = array('order' => 'name desc');
			$this->set('agendas', $this->Agenda->find('all', array(
        	'conditions' => array('Agenda.piso' => $condicion))));

		}
	}

	public function viewarea($condicion = null){
		
		if (is_null($condicion)) {
			$this->Agenda->recursive = 0;
			$params = array('order' => 'name desc');
			$this->set('agendas', $this->Agenda->find('all'));
			$this->set(compact('agendas','areas'));
		}
		else{
			$params = array('order' => 'name desc');
			$this->set('agendas', $this->Agenda->find('all', array(
        	'conditions' => array('Agenda.area_id' => $condicion))));		
        	$this->set(compact('agendas','areas'));
		}
	}

	public function delete($id){
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		else{
			if ($this->Agenda->delete($id)) {
				$this->Session->setFlash('Persona Eliminada');
				$this->redirect(array('action'=>'index'));
			}
		}
	}
}
?>