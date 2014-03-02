<?php
class Player extends AppModel {
	public $useTable = 'player';
	public $data;

	public function checkPass($player_id, $in_password) {
		$res = $this->find('first', array('conditions' => array('Player.player_id' => $player_id)));
		if (empty($res)) { return false; }
		$player_data = $res['Player'];
		return ($in_password === $player_data['password']) ? true : false;
	}
}
