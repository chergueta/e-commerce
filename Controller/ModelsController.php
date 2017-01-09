<?php

App::uses('AppController', 'Controller');

class ModelsController extends AppController {
  public $uses = array('Item','Brand', 'BrandModel');

  public function index(){
    $this->layout = 'default';
    $BrandModel = $this->BrandModel->find('all', array('conditions'=>array('BrandModel.active' => 1)));
    $this->log($BrandModel);
    $this->set('brandModel', $BrandModel);
  }

  public function create(){
    $this->layout = 'default';
    $Brands = $this->Brand->find('list', array('conditions' => array('Brand.active' => 1)));
    $this->set('brands', $Brands);
    if ($this->request->is('post')) {
      if($this->BrandModel->save($this->request->data)){
        return $this->redirect(array('action' => 'index'));
      };
    }
  }

  public function view(){
    $this->layout = 'default';

  }
}
?>
