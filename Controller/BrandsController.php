<?php

App::uses('AppController', 'Controller');

class BrandsController extends AppController {
  public $uses = array('Brand');

  public function index(){
    $this->layout = 'default';
    $brands = $this->Brand->find('all', array('conditions' => array('Brand.active' => 1)));
    $this->set('brands', $brands);

  }
  public function create(){
    $this->layout = 'default';
    if ($this->request->is('post')) {
      $this->log($this->request->data);
      if($this->Brand->save($this->request->data)){
        return $this->redirect(array('action' => 'index'));
      };
    }

  }
  public function delete($id = null){
    $this->autoRender = false;
    $brand = $this->Brand->find('first', array('conditions' => array('Brand.id' => $id)));
    $brand['Brand']['active'] = 0;
    $this->Brand->save($brand);
    return json_encode(true);

  }
  public function view(){
    $this->layout = 'default';

  }
  
  public function upload($action = 0) {
    $this->autoRender = false;
    if($action!=0){
      if($action == 1){
        $time = strtotime ( "now" );
        $targetFolder = '../webroot/files/'; // Relative to the root
        if (! empty ( $_FILES )) {
          $tempFile = $_FILES ['file'] ['tmp_name'];
          $targetPath = $targetFolder;
          // Validate the file type
          $fileTypes = array (
              'jpg',
              'jpeg',
              'gif',
              'png',
              'JPG',
              'JPEG',
              'GIF',
              'PNG'
          ); // File extensions
          $fileParts = pathinfo ( $_FILES ['file'] ['name'] );
          if (in_array ( $fileParts ['extension'], $fileTypes )) {
            $name = "img" . $time . $this->__randomStr ( 3 );
            $targetFile = rtrim ( $targetPath, '/' ) . '/' . $name . "." . $fileParts ['extension'];
            if (move_uploaded_file ( $tempFile, $targetFile )) {
              $namepath = $name . "." . $fileParts ['extension'];
              return json_encode ($namepath );
            } else {
              return json_encode ( array (
                  false,
                  false 
              ) );
            }
          } else {
            echo 'Imagen no valida';
          }
        }

      }

    }else{
      echo 'error';
    }
  }

  function __randomStr($length) {
    $str = '';
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  
    $size = strlen ( $chars );
    for($i = 0; $i < $length; $i ++) {
      $str .= $chars [rand ( 0, $size - 1 )];
    }
  
    return $str;
  }
}
?>
