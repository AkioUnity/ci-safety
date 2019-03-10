<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {

	public function index()
	{
        $redirect = '/admin';
        redirect( $redirect );
//		$this->render('home', 'full_width');
	}
}
