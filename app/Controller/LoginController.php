<?php
class LoginController extends AppController {

	public $uses = array('Player');

	public function beforeFilter() {
	}

	public function index() {
		if (isset($this->request->data['error'])) {
			$this->set('error_msg', '');
		}
	}
}