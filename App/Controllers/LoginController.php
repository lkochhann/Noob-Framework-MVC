<?php
namespace App\Controllers;

use Core\Controller;

class LoginController extends Controller {

    public function index() {
        
        $params = [
            'user' => [
                'nameUser' => 'alifer',
                'password' => '123321' 
            ]
        ];

        $this->view('login', $params);
    }

    public function checkUser() {
        $login= 'alifer';
        $user = new User();
        $targetUser = $user->find(null, 'login = ' . $login);
    
        $this->view('login', ['user' => $targetUser]);
      }   
}