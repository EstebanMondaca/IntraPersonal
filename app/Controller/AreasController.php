<?php

class AreasController extends AppController {
	public function beforeFilter() {
    		$this->Auth->allow('index','view');
    }
    
	public $paginate = array(
		'limit' => 10,
		'order' => array('Area.id' => 'asc')
		);

	public function index(){
		$this->Area->recursive = 0;
		$areas = $this->paginate();

		if($this->request->is('requested')):
			return $areas;
		else:
			$this->set('areas',$areas);
		endif;
	}
	
	public function add(){
			
		if($this->request->is('post')):
			if($this->Area->save($this->request->data)):
				$this->Session->setFlash('El area ha sido guardado');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	}
	public function edit($id = null){
		$this->Area->id = $id;

		if ($this->request->is('get')) {
			$this->request->data = $this->Area->read();
		}
		else { //si no es get
			if ($this->Area->save($this->request->data)) 
			{
				$this->Session->setFlash('Area Guardada');
				$this->redirect(array('action' => 'index' ));
			}
			else{
				$this->Session->setFlash('No se pudo guardar');
			}
			
		}
	}
	public function delete($id){
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		else{
			if ($this->Area->delete($id)) {
				$this->Session->setFlash('Area Eliminada');
				$this->redirect(array('action'=>'index'));
			}
		}
	}

	public function viewAll(){
		$this->Area->recursive = 0;
		$params = array('order' => 'name desc');
		$this->set('areas', $this->Area->find('all'));
	}

	public function view(){
		$this->Area->recursive = 0;
		$params = array('order' => 'name desc');
		$this->set('areas', $this->Area->find('all'));
	}
}
?>