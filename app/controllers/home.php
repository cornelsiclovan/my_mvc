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
    
    public function getUser($username = '', $email= '')
    {
        
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
        if(isset($username) && $username != '' && isset($email) && $email != '')
        {
            $user = User::where('email', $email)->first();
            if($user != null)
            {
                $user->username = $username;
                $user->save();
            }
            //var_dump($user->username);
        }
    }
    
    public function updateEmail($username='', $email = '')
    {
        if(isset($username) && $username != '' && isset($email) && $email != '')
        {
            $user = User::where('username', $username)->first();
            if($user != null)
            {
                $user->username = $email;
                $user->save();
            }
            //var_dump($user->username);
        }
    }
}