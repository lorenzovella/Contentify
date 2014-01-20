<?php namespace App\Modules\Contact\Models;

use Ardent;

class ContactMessage extends Ardent {

    protected $softDelete = true;

    protected $fillable = array('username', 'email', 'title', 'text');

    public static $rules = array(
        'username'  => 'required',
        'email'     => 'required|email',
        'title'     => 'required',
        'text'      => 'required',
    );

}