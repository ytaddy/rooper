<?php
class Player extends AppModel {
	public $useTable = 'player';
	public $data;

	public function checkPass($player_id, $in_password) {
		$password = $this->find('first', array('condition' => array('Player.player_id' => $player_id)));
		return ($in_password === $password) ? true : false;
	}
}
