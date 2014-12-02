<?php
App::uses('AppController', 'Controller');
/**
 * Facturas Controller
 *
 * @property Factura $Factura
 * @property PaginatorComponent $Paginator
 * @property Inventario $Inventario
 */
class FacturasController extends AppController {

/**
 * Components
 *
 * @var array
 */
        public $uses = array('Factura', 'FacturaItem', 'Inventario');
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Factura->recursive = 0;
		$this->set('facturas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Factura->exists($id)) {
			throw new NotFoundException(__('Invalid factura'));
		}
		$options = array('conditions' => array('Factura.' . $this->Factura->primaryKey => $id));
		$this->set('factura', $this->Factura->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function create() {
		if ($this->request->is('post')) {
                    
                    //debug($this->request->data);
                    
			/*$this->Factura->create();
			if ($this->Factura->save($this->request->data)) {
				$this->Session->setFlash(__('The factura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The factura could not be saved. Please, try again.'));
			}*/
		}
                
                //debug($this->Session->read('Factura'));
                
		$clientes = $this->Factura->Cliente->find('list');
		$users = $this->Factura->User->find('list');
		$this->set(compact('clientes', 'users'));
	}
        
        public function read_table(){
            $this->autoRender = false;
            $result = null;
            
            /*$this->Session->delete('Factura');
            $this->Session->delete('ItemFactura');*/
            
            if($this->Session->check('Factura')){
                $result = $this->Session->read('Factura');
            }
            
            return json_encode($result);
        }
        
        public function delete_item(){
            
            $this->autoRender = false;
            
            $result = null;
            
            if($this->request->is("POST")){
                if($this->Session->check('Factura')){
                    
                    $data = $this->Session->read('Factura');
                    
                    unset($data['Factura']['ItemFactura'][$this->request->data['id']]);
                    
                    $result = $data;
                    
                    $this->Session->write('Factura', $data);
                    
                }
            }
            
            return json_encode($result);
            
        }

        public function add_items(){
            
            $this->autoRender = false;
            
            if ($this->request->is('post')) {
                    
                $result = null;
                
                    if($this->Session->check('Factura')){
                       
                        $items = $this->Session->read('Factura');
                        
                        $this->request->data['Factura']['ItemFactura']['0']['descripcion'] = $this->Inventario->field('descripcion', array('codigo'=>$this->request->data['Factura']['ItemFactura']['0']['codigo']));
                        
                        $items['Factura']['ItemFactura'][] = $this->request->data['Factura']['ItemFactura']['0'];
                        
                        $this->Session->write('Factura', $items);
                        
                    }else{
                        
                        $this->request->data['Factura']['ItemFactura']['0']['descripcion'] = $this->Inventario->field('descripcion', array('codigo'=>$this->request->data['Factura']['ItemFactura']['0']['codigo']));
                        $data['Factura']['ItemFactura'][] = $this->request->data['Factura']['ItemFactura']['0'];
                        
                        $this->Session->write('Factura', $data);
                        
                    }
		}
                
                return json_encode($this->Session->read('Factura'));
        }

        /**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Factura->exists($id)) {
			throw new NotFoundException(__('Invalid factura'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Factura->save($this->request->data)) {
				$this->Session->setFlash(__('The factura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The factura could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Factura.' . $this->Factura->primaryKey => $id));
			$this->request->data = $this->Factura->find('first', $options);
		}
		$clientes = $this->Factura->Cliente->find('list');
		$users = $this->Factura->User->find('list');
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
		$this->Factura->id = $id;
		if (!$this->Factura->exists()) {
			throw new NotFoundException(__('Invalid factura'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Factura->delete()) {
			$this->Session->setFlash(__('The factura has been deleted.'));
		} else {
			$this->Session->setFlash(__('The factura could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
