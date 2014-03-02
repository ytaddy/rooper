<?php
class Player extends AppModel {
	public $useTable = 'player';
	public $data;

	public function checkPass($player_id, $in_password) {
		$password = $this->find('first', array('conditions' => array('Player.player_id' => $player_id)));
		var_dump($in_password);var_dump($password);
		return ($in_password === $password) ? true : false;
	}
}
