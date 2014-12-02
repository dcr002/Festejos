<?php
App::uses('AppController', 'Controller');
/**
 * Configuracions Controller
 *
 * @property Configuracion $Configuracion
 * @property PaginatorComponent $Paginator
 */
class ConfiguracionsController extends AppController {

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
		$this->Configuracion->recursive = 0;
		$this->set('configuracions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Configuracion->exists($id)) {
			throw new NotFoundException(__('Invalid configuracion'));
		}
		$options = array('conditions' => array('Configuracion.' . $this->Configuracion->primaryKey => $id));
		$this->set('configuracion', $this->Configuracion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Configuracion->create();
			if ($this->Configuracion->save($this->request->data)) {
				$this->Session->setFlash(__('La variable de configuración fue almacena.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Variable de configuración no almacena.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Configuracion->exists($id)) {
			throw new NotFoundException(__('Invalid configuracion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Configuracion->save($this->request->data)) {
				$this->Session->setFlash(__('La variable de configuración fue almacena.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Variable de configuración no almacena.'));
			}
		} else {
			$options = array('conditions' => array('Configuracion.' . $this->Configuracion->primaryKey => $id));
			$this->request->data = $this->Configuracion->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Configuracion->id = $id;
		if (!$this->Configuracion->exists()) {
			throw new NotFoundException(__('Invalid configuracion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Configuracion->delete()) {
			$this->Session->setFlash(__('Variable eliminada.'));
		} else {
			$this->Session->setFlash(__('Variable no eliminada'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
