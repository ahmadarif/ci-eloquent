<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	
    protected $table = 'posts';
    public $timestamps = FALSE;

    /*
     * invers dari relasi User->posts()
     */
    public function user() {
        return $this->belongsTo('User');
    }
}

/* End of file User.php */
/* Location: ./application/models/User.php */