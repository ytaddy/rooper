<?php
class LoginController extends AppController {

	public $uses = array('Player');

	public function index() {
		$player_id = $this->request->params['data']['player_id'];
		$password = $this->reques->params['data']['password'];
		$res = $this->Player->checkPass($player_id, $password);

		var_dump($player_id);var_dump($res);
	}
}