<?php

// bendra appso klase
class App
{

    public $auth;
    public static $app;

    public function __construct()
    {
        $this->auth = new Auth;

    }


    public static function redirect($action)
    {
        
        
        header('Location: '.URL.'?action='.$action);
        die();

    }


    public function route()
    {
        //$action = $_GET['action'] ?? ''; req PHP v.7.0

        $action = (isset($_GET['action'])) ? $_GET['action'] : 'index';

        $this->auth->check($action);


        if ($action == 'new') {
            $ads = new Ads;
            return $ads->create();
        }
        elseif ($action == 'save') {
            $ads = new Ads;
            return $ads->save($_POST);
        }
        elseif ($action == 'index') {
            $ads = new Ads;
            return $ads->index();
        }
        elseif ($action == 'edit') {
            $ads = new Ads;
            return $ads->edit($_GET['id']);
        }
        elseif ($action == 'update') {
            $ads = new Ads;
            return $ads->update($_GET['id'], $_POST);
        }

        elseif ($action == 'delete') {
            $ads = new Ads;
            return $ads->destroy($_GET['id']);
        }

        elseif ($action == 'login') {
            if (!empty($_POST)) {
                $this->auth->authorize($_POST);
            }


            require VIEW.'login.php';
            return;
        }
        elseif ($action == 'logout') {
            $this->auth->logout();
        }
    }


}
