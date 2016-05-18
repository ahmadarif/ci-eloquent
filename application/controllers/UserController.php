<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User');
    }
    
    public function index() {
        $users = User::all();

        foreach ($users as $key => $value) {
            echo "ID : ".$value->id."<br>";
            echo "First Name : ".$value->first_name."<br>";
            echo "Last Name : ".$value->last_name."<br>";
            echo "Email : ".$value->email."<br><br>";
        }
    }

    public function save()
    {
    	$user = new User();
    	$user->first_name = "Ahmad";
    	$user->last_name = "Arif";
    	$user->email = "ahmad.arif019@gmail.com";
    	$user->save();
    }

    public function update()
    {
    	$user = User::find(1);
    	$user->email = "ahmad_arif@icloud.com";
    	$user->save();
    }
}

/* End of file UserController.php */
/* Location: ./application/controllers/UserController.php */