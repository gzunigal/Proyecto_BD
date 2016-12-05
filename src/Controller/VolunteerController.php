<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

class VolunteerController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
    }

    public function index()
    {
        
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

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

}