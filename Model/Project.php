<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 * @property Personal $Personal
 * @property Client $Client
 * @property Personal $Personal
 */
class Project extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Personal' => array(
			'className' => 'Personal',
			'foreignKey' => 'personal_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Personal' => array(
			'className' => 'Personal',
			'joinTable' => 'personals_projects',
			'foreignKey' => 'project_id',
			'associationForeignKey' => 'personal_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
