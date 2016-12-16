<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class NotificationsController extends AppController
{

    public function view($id = null)
    {
        $datos = $this->request->session();
        $this->loadModel('NotificationsUsers');
        $notifications = $this->NotificationsUsers->find('all')
            ->where(['NotificationsUsers.user_id' => $datos->read('User.id')])
            ->contain(['Notifications'])
            ->order(['NotificationsUsers.id' => 'DESC']);

        foreach ($notifications as $n) {
            $notificationsTable = TableRegistry::get('NotificationsUsers');
            $notification = $notificationsTable->get($n->id); // Return article with id 12

            $notification->visto = 1;
            $notificationsTable->save($notification);
        }

        $this->set(compact('notifications'));
    }

    
}
