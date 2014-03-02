<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $uses = array('Player');

	public function beforeFilter() {
		if (isset($this->request->data['player_id'])
			&& isset($this->request->data['password'])) {
			if (! $this->Player->checkPass($this->request->data['player_id'], $this->request->data['password'])) {
				return $this->redirect(array('controller' => 'Login', 'action' => 'index'));
			} else {
				$this->check_key = $this->Player->updateCheckKey($this->request->data['player_id'], $this->request->data['password']);
			}
		} else if (isset($this->request->data['player_id'])
					&& isset($this->request->data['check_key'])) {
			if (! $this->Player->checkPlayer($this->request->data['player_id'], $this->request->data['check_key'])) {
			//return $this->redirect(array('controller' => 'Login', 'action' => 'index'));
			}
		} else {
			return $this->redirect(array('controller' => 'Login', 'action' => 'index'));
		}

		$this->player_id = $this->request->data['player_id'];
	}
}
