<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;


class AdministratorController extends AppController
{
    public function index()
    {
        
    }

    public function view()
    {
        $this->loadModel('Emergencies');
        $this->loadModel('Communes');
        
        $emergencies = $this->Emergencies->find('all')
            ->contain(['Communes']);

        $this->set(compact('comunes'));
        $this->set(compact('emergencies'));
    }
    
    public function logout(){
        return $this->redirect($this->Auth->logout());
    }
}