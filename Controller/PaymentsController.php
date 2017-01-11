<?php

App::uses('AppController', 'Controller');

class PaymentsController extends AppController {
  public $uses = array('Item');

  public function index(){
    $this->layout = 'default';
  }

  public function confirm_payment(){
    
  }
}
?>
