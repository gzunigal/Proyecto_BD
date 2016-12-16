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

    public function request($idUser)
    {
        $this->loadModel('Requests');
        $this->loadModel('Tasks');
        $this->loadModel('Users');
        $this->loadModel('Missions');


        $requests = $this->Requests->find('all')
            ->where(['Requests.user_id' => $idUser])
            ->contain(['Tasks']);

        $this->set(compact('requests'));
        $this->set(compact('idUser'));

        $datos = $this->request->data;
        if($this->request->is('post'))
        {
            /*echo '<br><br><br><br><br>';
            print_r($datos);*/
            if($datos['status'] == 0)
            {
                $requestDel = $this->Requests->get($datos['r_del']);
                $task       = $this->Tasks->get($requestDel->task_id);
                $mission    = $this->Missions->get($task->mission_id);
                $user       = $this->Users->get($mission->user_id);

                $this->Requests->delete($requestDel);
                $notificationTable = TableRegistry::get('Notifications');
                $notification = $notificationTable->newEntity();
                $notification->contenido = "Se ha rechazado una solicitud";
                if($notificationTable->save($notification))
                {
                    $notificationUserTable = TableRegistry::get('NotificationsUsers');
                    $notificationUser = $notificationUserTable->newEntity();

                    $notificationUser->notification_id = $notification->id;
                    $notificationUser->user_id = $user->id;
                    $notificationUser->visto = 0;
                    $notificationUserTable->save($notificationUser);
                }
            }
            else
            {
                $requestDel = $this->Requests->get($datos['r_acc']);
                $task = $this->Tasks->get($requestDel->task_id);
                $mission    = $this->Missions->get($task->mission_id);
                $user       = $this->Users->get($mission->user_id);

                $tableTaskUsers = TableRegistry::get('TasksUsers');
                $taskUsers = $tableTaskUsers->newEntity();

                $taskUsers->task_id = $task->id;
                $taskUsers->user_id = $idUser;
                $this->Requests->delete($requestDel);

                if($tableTaskUsers->save($taskUsers))
                {
                    $notificationTable = TableRegistry::get('Notifications');
                    $notification = $notificationTable->newEntity();
                    $notification->contenido = "Se ha aceptado una solicitud";
                    if($notificationTable->save($notification))
                    {
                        $notificationUserTable = TableRegistry::get('NotificationsUsers');
                        $notificationUser = $notificationUserTable->newEntity();

                        $notificationUser->notification_id = $notification->id;
                        $notificationUser->user_id =  $user->id;
                        $notificationUser->visto = 0;
                        $notificationUserTable->save($notificationUser);
                    }
                }
            }
        }
    }

    public function documents()
    {
        
    }

    public function tasks()
    {
        $this->loadModel("TasksUsers");

        $user = $this->request->session()->read('User.Entity');
        $tareas = $this->TasksUsers->find()
                                    ->where(["user_id"=>$user->id])
                                    ->contain(['Tasks']);

        $this->set(compact('tareas'));  

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
                $abilitiesUsers->nivel_habilidad    = 1;
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