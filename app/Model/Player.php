<?php
class Player extends AppModel {
	public $useTable = 'player';
	public $data;

	public function checkPass($player_id, $in_password) {
		$player_data = $this->find('first', array('conditions' => array('Player.player_id' => $player_id)));
		var_dump($player_data);
		return ($in_password === $player_data['password']) ? true : false;
	}
}
