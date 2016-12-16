<?php
namespace App\Controller;

use App\Controller\AppController;


class NotificationsController extends AppController
{

    public function view($id = null)
    {
        $datos = $this->request->session();
        $this->loadModel('NotificationsUsers');
        $notifications = $this->NotificationsUsers->find('all')
            ->where(['NotificationsUsers.user_id' => $datos->read('User.id')])
            ->contain(['Notifications']);
    }

    
}
