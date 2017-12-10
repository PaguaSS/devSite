<?php
/**
 * @copyright     Copyright (c) Anthony Paguaga
 * @package       app.Controller
 */

class AuthController extends AppController {

	public $name = "Auth";
	public $uses = array('AdminUser');
    public $helpers = array('Js');

	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function admin_index(){

	}
	
}