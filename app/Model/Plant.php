<?php

class Plant extends AppModel {
	public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );


    // public function getPlantSize() {
    // 	$plantsSize = $this->Plant->find('all' [
    // 		'recursive' => -1,
    // 		'fields' => ['Plant.size']
    // 	]);

    // 	return $plantsSize;
    // }


    // public function somefunction() {
    // 	$plantsSize = $this->getPlantSize();

    // 	foreach ($plantsSize as $plantSize) {
    // 		if ($plantSize =< 2) {
    // 			$size = '2号鉢以下';
    // 		} elseif ($plantSize == 3 ) {
    // 			$size = '3号鉢';
    // 		} elseif ($plantSize == 4) {
    // 			$size = '4号鉢';
    // 		} elseif ($plantSize == 5) {
    // 			$size = '5号鉢';
    // 		} elseif ($plantSize == 6) {
    // 			$size = '6号鉢';
    // 		} elseif ($plantSize >= 7) {
    // 			$size = '7号鉢以上'
    // 		}
    // 		return $size;
    // 	}
    // }
}