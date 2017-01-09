<?php
App::uses('AppModel', 'Model');
/**
 * Balance Model
 *
 */
class BrandModel extends AppModel {

public $belongsTo = array(
			'Brand' => array(
					'className' => 'Brand',
					'foreignKey' => 'brand_id',
					'conditions' => '',
					'fields' => '',
					'order' => ''
			));

}
