<?php
/**
 * @copyright     Copyright (c) Anthony Paguaga
 * @package       app.Controller
 */

App::uses('Controller', 'Controller');

class AppController extends Controller {

	public function beforeFilter() {
	    if ((isset($this->params['prefix']) && ($this->params['prefix'] == 'admin'))) {
	        $this->layout = 'admin';
	    }
	}
	
}
