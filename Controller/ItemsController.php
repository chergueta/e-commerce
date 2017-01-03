<?php

App::uses('AppController', 'Controller');

class ItemsController extends AppController {
  public $uses = array('Item');

  public function index(){
    $this->layout = 'default';
    $myItems = $this->Item->find('all', array('conditions'=>array('Item.user_id' => $this->UserAuth->getUserId())));
    $this->set('myItems', $myItems);

  }
  public function create(){
    $this->layout = 'default';
    if ($this->request->is('post')) {
      if($this->Item->save($this->request->data)){
        return $this->redirect(array('action' => 'index'));
      };
    }


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
