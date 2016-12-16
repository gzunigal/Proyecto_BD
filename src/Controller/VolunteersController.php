<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

class VolunteersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
    }

    public function index()
    {
        $sesion = $this->request->session();
        $id = $sesion->read('User.id');

        $this->set(compact('id'));
    }

    public function request()
    {

    }

    public function documents()
    {
        
    }

    public function tasks()
    {
        
    }

    public function assignAbility($idVol)
    {
        $this->loadModel('AbilitiesUsers');
        $this->loadModel('Abilities');
        
        

        $userAbilities = $this->AbilitiesUsers->find('all')
            ->where(['AbilitiesUsers.user_id' => $idVol])
            ->contain(['Abilities']);

        

        $abilities = $this->Abilities->find('all');

        $this->set(compact('idVol'));   
        $this->set(compact('userAbilities'));
        $this->set(compact('abilities'));

        $datos = $this->request->data;
        if($this->request->is('post'))
        {
            $aUsersTable = TableRegistry::get('AbilitiesUsers');

            $abilitiesUsers = $aUsersTable->newEntity();
            $existe = $this->AbilitiesUsers->find('all')
            ->where(['AbilitiesUsers.user_id' => $datos['ability_user'], 
                    'AbilitiesUsers.ability_id' => $datos['ability_new']]);

            if($existe->count() == 0)
            {
                $abilitiesUsers->user_id            = $datos['ability_user'];
                $abilitiesUsers->nivel_habilidad    = 0;
                $abilitiesUsers->ability_id         = $datos['ability_new'];
    
                $aUsersTable->save($abilitiesUsers);
            }
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

}