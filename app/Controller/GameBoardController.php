<?php

App::uses('Sanitize');

class GameBoardController extends AppController {

	public $uses = array('Player', 'GameBoard', 'Chessmen');

	public function loop () {
		$this->GameBoard->init(1);
		$res = $this->GameBoard->game_condition;
		$res = $this->GameBoard->find('first',array('conditions' => array('GameBoard.id' => 1)));

		$this->set('player_id', $this->player_id);
	}
}