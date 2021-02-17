<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class HomeController extends Controller {

    private $loggeduser;
    
    public function __construct() {
        $this->loggeduser = LoginHandler::checkLogin();
        if(LoginHandler::checkLogin()===false){
            $this->redirect('/login');
        }
    }
    
        
    

    public function index() {
        $this->render('home', ['nome' => 'Diego']);
    }


}