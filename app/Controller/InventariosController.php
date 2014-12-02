<?php
App::uses('AppController', 'Controller');
/**
 * Inventarios Controller
 *
 * @property Inventario $Inventario
 * @property PaginatorComponent $Paginator
 */
class InventariosController extends AppController {

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
		$this->Inventario->recursive = 0;
		$this->set('inventarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Inventario->exists($id)) {
			throw new NotFoundException(__('Invalid inventario'));
		}
		$options = array('conditions' => array('Inventario.' . $this->Inventario->primaryKey => $id));
		$this->set('inventario', $this->Inventario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Inventario->create();
			if ($this->Inventario->save($this->request->data)) {
				$this->Session->setFlash(__('The inventario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inventario could not be saved. Please, try again.'));
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
		if (!$this->Inventario->exists($id)) {
			throw new NotFoundException(__('Invalid inventario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Inventario->save($this->request->data)) {
				$this->Session->setFlash(__('Datos actualizados.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Datos no actualizados.'));
			}
		} else {
			$options = array('conditions' => array('Inventario.' . $this->Inventario->primaryKey => $id));
			$this->request->data = $this->Inventario->find('first', $options);
		}
	}
        
        public function upload($id = null) {
		if (!$this->Inventario->exists($id)) {
			throw new NotFoundException(__('Invalid inventario'));
		}
		if ($this->request->is(array('post', 'put'))) {
                    
                    $data = $this->request->data;
                    $actual = $data['Inventario']['cantidad'] + $data['Inventario']['aumento'];
                    debug($actual);
                    
                    if($data['Inventario']['aumento'] > 0){
                        
                        $this->Inventario->read(null, $id);
                        $this->Inventario->set(array('cantidad'=>$actual));
                        
                        if ($this->Inventario->save()) {
				$this->Session->setFlash(__('Carga Exitosa.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Carga no realizada.'));
			}
                        
                    }else{
                        $this->Session->setFlash(__('El valor de aumento debe ser mayor a cero "0".'));
                    }
		} else {
			$options = array('conditions' => array('Inventario.' . $this->Inventario->primaryKey => $id));
			$this->request->data = $this->Inventario->find('first', $options);
		}
	}
        
        public function download($id = null) {
		if (!$this->Inventario->exists($id)) {
			throw new NotFoundException(__('Invalid inventario'));
		}
		if ($this->request->is(array('post', 'put'))) {
                    
                    $data = $this->request->data;
                    $actual = $data['Inventario']['cantidad'] - $data['Inventario']['decremento'];
                    debug($actual);
                    
                    if($data['Inventario']['decremento'] > 0 && $data['Inventario']['decremento'] < $data['Inventario']['cantidad']){
                        
                        $this->Inventario->read(null, $id);
                        $this->Inventario->set(array('cantidad'=>$actual));
                        
                        if ($this->Inventario->save()) {
				$this->Session->setFlash(__('Descarga Exitosa.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Descarga no realizada.'));
			}
                        
                    }else{
                        $this->Session->setFlash(__('El decremento debe ser mayor a cero "0", menor ó igual a la cantidad total de items.'));
                    }
		} else {
			$options = array('conditions' => array('Inventario.' . $this->Inventario->primaryKey => $id));
			$this->request->data = $this->Inventario->find('first', $options);
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
		$this->Inventario->id = $id;
		if (!$this->Inventario->exists()) {
			throw new NotFoundException(__('Invalid inventario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Inventario->delete()) {
			$this->Session->setFlash(__('The inventario has been deleted.'));
		} else {
			$this->Session->setFlash(__('The inventario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function find($id = null){
            $this->autoRender = false;
            
            $this->Inventario->unbindModel(
                    array(
                        'hasMany'=>array(
                            'ItemFactura',
                            'ItemPresupuesto'
                        )
                    )
            );
            
            $options['Conditions'] = array('codigo LIKE'=>'%'.$id);
            
            $productos = $this->Inventario->find('all', $options);
            
            foreach ($productos as $key => $value) {
                $results['suggestions'][] = array('value'=>$value['Inventario']['codigo'], 'data'=>$value['Inventario']);
            }
            
            return json_encode($results);
        }
}
