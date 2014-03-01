<?php
class GameBoard extends AppModel {
	public $useTable = 'game_condition';
	public $game_condition;

	public function init($id) {
		$query = "select * from ytaddy_rooper.game_condition where id = '$id'";
		$this->game_condition = $this->query($query);
	}
}