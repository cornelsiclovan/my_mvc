<?php

class Home extends Controller
{
    protected $user;
    
    public function __construct()
    {
        $this->user = $this->model('User');
    }
    
    public function index($name = '')
    {
        $user = $this->user;
        $user->name = $name;
        $this->view('home/index', ['name' => $user->name]);
    }
    
    public function getAllUsers()
    {
        $users = User::all();
        $this->view('home/manage_users', ['users' => $users]);
    }
    
    public function create($username = '', $email = '')
    {
        User::create([
            'username' => $username,
            'email'    => $email
        ]);
    }
    
    public function updateName($username='', $email = '')
    {
        $user = User::where('username', $email)->first();
        var_dump($user->username);
    }
}