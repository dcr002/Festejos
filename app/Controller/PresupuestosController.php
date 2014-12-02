<?php
App::uses('AppController', 'Controller');
/**
 * Presupuestos Controller
 *
 * @property Presupuesto $Presupuesto
 * @property PaginatorComponent $Paginator
 */
class PresupuestosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Presupuesto->recursive = 0;
		$this->set('presupuestos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Presupuesto->exists($id)) {
			throw new NotFoundException(__('Invalid presupuesto'));
		}
		$options = array('conditions' => array('Presupuesto.' . $this->Presupuesto->primaryKey => $id));
		$this->set('presupuesto', $this->Presupuesto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Presupuesto->create();
			if ($this->Presupuesto->save($this->request->data)) {
				$this->Session->setFlash(__('The presupuesto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presupuesto could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Presupuesto->Cliente->find('list');
		$users = $this->Presupuesto->User->find('list');
		$this->set(compact('clientes', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Presupuesto->exists($id)) {
			throw new NotFoundException(__('Invalid presupuesto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Presupuesto->save($this->request->data)) {
				$this->Session->setFlash(__('The presupuesto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presupuesto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Presupuesto.' . $this->Presupuesto->primaryKey => $id));
			$this->request->data = $this->Presupuesto->find('first', $options);
		}
		$clientes = $this->Presupuesto->Cliente->find('list');
		$users = $this->Presupuesto->User->find('list');
		$this->set(compact('clientes', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Presupuesto->id = $id;
		if (!$this->Presupuesto->exists()) {
			throw new NotFoundException(__('Invalid presupuesto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Presupuesto->delete()) {
			$this->Session->setFlash(__('The presupuesto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The presupuesto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
