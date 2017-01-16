<?php

App::uses('AppController', 'Controller');

App::uses('Paypal','Paypal.lib');

class PaymentsController extends AppController {
  public $uses = array('Payment');

  public function index(){
    $this->layout = 'default';
    if ($this->request->is('post')) {
      $this->Payment->create();
      if ($this->Payment->save($this->request->data)) {
         $this->Session->setFlash(__('Su pedido se ha registrado.'), 'default', array('class' => 'success_message'));
        //return $this->redirect(array('action' => 'index'));

      } else {

        $this->Session->setFlash(__('Su pedido no se ha registrado, intentelo nuevamente'), 'default', array('class' => 'error_message'));
      }
    }
    $this->Paypal = new Paypal(array(
    'sandboxMode' => true,
    'nvpUsername' => 'aliriomiguel-facilitator_api1.gmail.com',
    'nvpPassword' => 'ZVA8GNWSBN8U9BPH',
    'nvpSignature' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31AtM0lsjAPmANC0vZRIGPgk6znVfs'
    ));

    $order = array(
    'description' => 'Plan de publicacion en DigiShop',
    'currency' => 'USD',
    'return' => 'http://www.google.com',
    'cancel' => 'http://www.google.com',
    // 'return' => 'https://www.my-amazing-clothes-store.com/review-paypal.php',
    // 'cancel' => 'https://www.my-amazing-clothes-store.com/checkout.php',
    // 'custom' => 'bingbong',
    // 'shipping' => '4.50',
    'items' => array(
        0 => array(
            'name' => 'Plan Digishop',
            'description' => 'Un plan de tiempo de publicación',
            // 'tax' => 2.00,
            'subtotal' => $this->request->data['Payment']['price'],
            'qty' => 1,
        ),
    )
    );

    try{
      echo($order['description']);
        $this->Paypal->setExpressCheckout($order);
    //    $token = $this->Paypal->getExpressCheckoutDetails($token);
   //     $this->Paypal->getExpressCheckoutDetails($payerId);
        echo ($this->Paypal->HttpSocket->response);
        debug($this->Paypal);
    } catch (Exception $e) {
      echo($e);
        // $e->getMessage();
    }

    try {
    $this->Paypal->doExpressCheckoutPayment($order, $token, $payerId);  
    } catch (PaypalRedirectException $e) {
        $this->redirect($e->getMessage());
    } catch (Exception $e) {
        // $e->getMessage();
    }   

  }



}
?>
