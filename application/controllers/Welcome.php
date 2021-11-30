<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

class Welcome extends CI_Controller
{
	

	public function index()
    {
		$this->load->model('Customer_Model');

         // panggil helper nohp
		$this->load->helper('nohp');
		// panggil library text
		$this->load->helper('text');	
		// panggil library text
		$this->load->library('user_agent');	

        $data = array(
            "all"           =>  $this->Customer_Model->getData()->result(),
            'page_title'    => 'Chat'
        );

        $this->load->view('customer', $data);
    }
	
	
}
