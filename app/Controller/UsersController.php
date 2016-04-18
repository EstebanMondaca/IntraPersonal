<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
       // $this->Auth->allow('add');
        $this->Auth->allow('add', 'logout','login');
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }
    public function login() {
    	if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirectUrl());
	        }
	        $this->Flash->error(__('Nombre Invalido o pasword incorrecta, intente nuevamente'));
    	}
	}

	public function logout() {
    	return $this->redirect($this->Auth->logout());
	}

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuario invalido'));
        }
        $this->set('user', $this->User->findById($id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('El Usuario a sido guardado correctamente'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('El usuario no puede guardarse. Por favor, inténtelo de nuevo.')
            );
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuario invalido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('El usuario a sigo guardado'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('El usuario no puede guardarse. Por favor, inténtelo de nuevo.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuario Invalido'));
        }
        if ($this->User->delete()) {
            $this->Flash->success(__('Usuario Borrado'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('No se a eliminado el usuario'));
        return $this->redirect(array('action' => 'index'));
    }

}


?>