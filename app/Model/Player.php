<?php
class Player extends AppModel {
	public $useTable = 'player';
	public $data;

	public function checkPlayer($input) {
		$find_res = $this->find('first', array('conditions' => array('Player.chek_key' => $input)));
		if (empty($find_res)) { return false; }

		return true;
	}

	public function checkPass($player_id, $in_password) {
		$find_res = $this->find('first', array('conditions' => array('Player.player_id' => $player_id)));
		if (empty($find_res)) { return false; }
		$player_data = $find_res['Player'];
		return ($in_password === $player_data['password']) ? true : false;
	}

	public function updateCheckKey($player_id, $password) {
		$this->save(array('Player' => array('player_id' => $player_id, check_key' => crypt($player_id . $password))));
	}
}