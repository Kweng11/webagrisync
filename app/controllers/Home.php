<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Home extends Controller {
	public function index() {
		$this->call->view('Home');
	
	}
	public function Contact() {
		$this->call->view('Contact');
	
	}
	public function About() {
		$this->call->view('About');
	
	}
	public function LGULogin() {
		$this->call->view('Login/LGULogin');
	
	}
	public function AdminLogin() {
		$this->call->view('Login/AdminLogin');
		
	
	}

}
?>