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

    public function getById($id)
    {
        $user = User::find($id);
        echo "Hello " . $user->first_name;
    }

    public function getByEmail()
    {
        $user = User::where('email', 'tia.lestari@gmail.com')
                    ->first();
        echo "Hello " . $user->first_name;
    }

    public function aggregates()
    {
        $count = User::all()->count();
        echo "Count = " . $count;

        $maxId = User::all()->max('id');
        echo "<br>Max Id = " . $maxId;

        $minId = User::all()->min('id');
        echo "<br>Min Id = " . $minId;

        $avgId = User::all()->avg('id');
        echo "<br>Avg Id = " . $avgId;
    }

    public function querys()
    {
        $email = User::find(1)->email;
        echo 'Email = ' . $email;

        $count = User::where('id', '<', 10)->count();
        echo '<br>Count id<10 = ' . $count; 
    }

    public function save()
    {
    	$user = new User();
        // $user->id = 1;
        $user->first_name = "E";
        $user->last_name = "E";
        $user->email = "E@mail.com";

        try {
            if ($user->save()) {
                echo "Berhasil";
            } else {
                echo "Gagal";
            }
        } catch(Illuminate\Database\QueryException $e) {
            echo $e->getMessage();
        }
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