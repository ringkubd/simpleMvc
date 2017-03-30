<?php

/* 
 * Author: MD. ANWAR JAHID.
 * Email: ajr.jahid@gmail.com
 * FB: www.fb.com/ringkud
 */
class Home extends Controller
{
    protected $user;

    public function __construct( )
    {
        $this->user = $this->model('user');
    }

    public function index($name = "")
    {
       $user = $this->user;
       $user->name = $name;
       $this->view('home/index',['name'=>$user->name]);
       
    }
    public function create($username = '',$password = ''){
        $this->user->create([
            'username'  => $username,
            'password'  => $password,
            'email'     => 'ajr.jahid@gmail.com'
          ]);
    }
    
}
