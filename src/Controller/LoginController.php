<?php
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
    }

    public function login(){
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
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    public function register(){
        $this->loadModel('Regions');
        $regions = $this->Regions->find('all');
        $this->set(compact('regions'));
        print_r($this->request->data);
    }
}