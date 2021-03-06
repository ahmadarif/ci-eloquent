<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'users';
    public $timestamps = FALSE;

    /*
     * relasi one to many
     */
    public function posts() {
        return $this->hasMany('Post');
    }
}

/* End of file User.php */
/* Location: ./application/models/User.php */