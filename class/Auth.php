<?php


class Auth
{
    private $user = 'Briedis';
    private $pass = '123';

    private $authUser = ['new', 'create', 'save', 'edit', 'update', 'delete'];



    public function __construct()
    {
        $this->pass = md5($this->pass);
    }

    public function authorize($data)
    {

        if (
            $this->pass === md5($data['pass']) &&
            $this->user === $data['name']
        ) {
            $_SESSION['user'] = 'logged';
            //$_SESSION['login'] = 1;
            App::redirect('index');
        }
        App::redirect('login');
    }

    public function check($action) 
    {
        if (in_array($action, $this->authUser)) {
            if ($_SESSION['user'] != 'logged') {
                App::redirect('login');
            }
        }
    }

    public function info() 
    {
        if (isset($_SESSION['user']) && $_SESSION['user'] == 'logged') {
            return $this->user;
        }
        else {
            return false;
        }
    }

    public function logout() 
    {
        unset($_SESSION['user']);
        App::redirect('index');
    }





}