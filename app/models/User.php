<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $name;
    public $email;
    
    public $timestamps = [];
    protected $fillable = ['username', 'email'];
    
}