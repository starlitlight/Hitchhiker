<?php
App::uses('AppModel', 'Model');
/**
 * Invite Model
 *
 * @property Event $Event
 * @property User $User
 * @property User $User
 */
class Invite extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'UserFrom' => array(
			'className' => 'User',
			'foreignKey' => 'user_from',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'UserTo' => array(
			'className' => 'User',
			'foreignKey' => 'user_to',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}