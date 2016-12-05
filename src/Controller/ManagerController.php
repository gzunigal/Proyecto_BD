<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

class ManagerController extends AppController
{
    public function index()
    {
        
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

}