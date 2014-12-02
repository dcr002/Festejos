<?php
App::uses('AppController', 'Controller');
/**
 * ItemPresupuestos Controller
 *
 * @property ItemPresupuesto $ItemPresupuesto
 * @property PaginatorComponent $Paginator
 */
class ItemPresupuestosController extends AppController {

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
		$this->ItemPresupuesto->recursive = 0;
		$this->set('itemPresupuestos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemPresupuesto->exists($id)) {
			throw new NotFoundException(__('Invalid item presupuesto'));
		}
		$options = array('conditions' => array('ItemPresupuesto.' . $this->ItemPresupuesto->primaryKey => $id));
		$this->set('itemPresupuesto', $this->ItemPresupuesto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemPresupuesto->create();
			if ($this->ItemPresupuesto->save($this->request->data)) {
				$this->Session->setFlash(__('The item presupuesto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item presupuesto could not be saved. Please, try again.'));
			}
		}
		$inventarios = $this->ItemPresupuesto->Inventario->find('list');
		$this->set(compact('inventarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemPresupuesto->exists($id)) {
			throw new NotFoundException(__('Invalid item presupuesto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemPresupuesto->save($this->request->data)) {
				$this->Session->setFlash(__('The item presupuesto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item presupuesto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemPresupuesto.' . $this->ItemPresupuesto->primaryKey => $id));
			$this->request->data = $this->ItemPresupuesto->find('first', $options);
		}
		$inventarios = $this->ItemPresupuesto->Inventario->find('list');
		$this->set(compact('inventarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemPresupuesto->id = $id;
		if (!$this->ItemPresupuesto->exists()) {
			throw new NotFoundException(__('Invalid item presupuesto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemPresupuesto->delete()) {
			$this->Session->setFlash(__('The item presupuesto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The item presupuesto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
