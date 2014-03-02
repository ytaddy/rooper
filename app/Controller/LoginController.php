<?php
class LoginController extends AppController {

	public $uses = array('Player');

	public function index() {
		var_dump($this->request);
		$player_id = $this->request->params['player_id'];
		$password = $this->reques->params['password'];
		$res = $this->Player->checkPass($player_id, $password);

		$this->set('player_id', $player_id);
	}
}