<?php

App::uses('AppController', 'Controller');

class ItemsController extends AppController {
  public $uses = array('Item');

  public function index(){
    $this->layout = 'default';

  }
  public function create(){
    $this->layout = 'default';

  }
  public function view(){
    $this->layout = 'default';

  }

}
?>
