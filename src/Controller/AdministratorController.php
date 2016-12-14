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
    	$this->loadModel('Emergencies');
    	$this->loadModel('Communes');

        $emergencies = $this->Emergencies->find('all');

    	$this->set(compact('comunes'));
        $this->set(compact('emergencies'));
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    public function addEmergency()
    {
    	echo "askdjhaksdhjkads";
    	exit();
    }

    public function gestionarPersona($rut)
    {
    	exit();
    }

}