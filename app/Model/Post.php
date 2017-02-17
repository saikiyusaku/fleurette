<?php

class Post extends AppModel {
	public $validate = array(
        'title' => array(
            // 'rule' => 'notEmpty'
            'rule' => 'notBlank'
        ),
        'body' => array(
            // 'rule' => 'notEmpty'
            'rule' => 'notBlank'
        )
    );
}