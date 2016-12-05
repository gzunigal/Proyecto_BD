<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class LoginController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->Auth->allow();
    }


    public function index()
    {
        $session = $this->request->session();
        if ($session->check('User')) {
            return $this->redirect(['controller' => 'Home', 'action' => 'index']);
        }
        return $this->redirect(['controller' => 'Login', 'action' => 'login']);
    }

    public function login(){
        $session = $this->request->session();
        if ($session->check('User')) {
            return $this->redirect(['controller' => 'Login', 'action' => 'logout']);
        }
        if ($this->request->is('post')) {
            //print_r($this->request->data);
            $user = $this->Auth->identify();
            print_r($user);
            echo $user;
            debug($user);
            if ($user) {
                echo "EXISTE!!!";
            }
            
        }

        // return $this->redirect(['controller' => 'Login', 'action' => 'index']);
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    public function register(){
        echo "HEY!";
    }
}