<?php

App::uses('AppController', 'Controller');

class ItemsController extends AppController {
  public $uses = array('Item');

  public function index(){
    $this->layout = 'adminPanel';
  }
  public function create(){
    $this->layout = 'default';

  }

}
?>
