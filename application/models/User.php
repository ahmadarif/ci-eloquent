<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Model;

class User extends Model
{
    protected $table = 'users';
    
    public $timestamps = FALSE;
}

/* End of file User.php */
/* Location: ./application/models/User.php */