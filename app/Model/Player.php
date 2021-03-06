<?php
class Player extends AppModel {
	public $useTable = 'player';
	public $data;

	public function checkPlayer($player_id, $check_key) {
		$find_res = $this->find('first', array('conditions' => array('Player.id' => $player_id)));
		var_dump($check_key);var_dump($find_res['Player']['check_key']);
		if ($check_key === $find_res['Player']['check_key']) { return true; }

		return false;
	}

	public function checkPass($player_id, $in_password) {
		$find_res = $this->find('first', array('conditions' => array('Player.id' => $player_id)));
		if (empty($find_res)) { return false; }
		$player_data = $find_res['Player'];
		return ($in_password === $player_data['password']) ? true : false;
	}

	public function updateCheckKey($player_id, $password) {
		$check_key = crypt($player_id . $password, 'sangeki');
		$this->save(array('Player' => array('id' => $player_id,
											'password' => $password,
											'check_key' => $check_key)));
		return $check_key;
	}
}