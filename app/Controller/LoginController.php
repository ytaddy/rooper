<?php
class LoginController extends AppController {

	public $uses = array('Player');

	function beforeFilter() {
		var_dump('hoge');
	}

	public function index() {
		$player_id = $this->request->data['player_id'];
		$password = $this->request->data['password'];
		$res = $this->Player->checkPass($player_id, $password);

		var_dump($player_id);var_dump($res);
		$this->set('player_id', $player_id);
	}
}