<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Cake\Auth\DefaultPasswordHasher;

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
        $this->loadModel('Communes');
        $communes = $this->Communes->find('all');
        $this->set(compact('communes'));
        /*Aquí se "agarran" los datos del formulario*/
        if ($this->request->is('post')) 
        {
            $hasher = new DefaultPasswordHasher();
            //$hasher->hash($password);


            $usersTable     = TableRegistry::get('Users');
            $phonesTable    = TableRegistry::get('Phones');
            $emailsTable    = TableRegistry::get('Emails');
            $user           = $usersTable->newEntity();
            $phone          = $phonesTable->newEntity();
            $email          = $emailsTable->newEntity();
            $datosUsuario   = $this->request->data;
            /*VERIFICAR SI YA EXISTE UN USUARIO*/
            /*Se cargan datos del usuario en las entidades*/
            $user->commune_id       = $datosUsuario['communes'];
            $user->nombre_usuario   = $datosUsuario['user_nickname'];
            $user->name             = $datosUsuario['user_name'];
            $user->surname          = $datosUsuario['user_surname'];
            $user->password         = $hasher->hash($datosUsuario['user_password']);
            $user->disponibilidad   = $datosUsuario['availability'];
            $user->admin            = 0;
            if($usersTable->save($user))
            {
                $phone->phone   = $datosUsuario['user_phone'];
                $phone->user_id = $user->id;
                if($phonesTable->save($phone))
                {
                    $email->email   = $datosUsuario['user_email'];
                    $email->user_id = $user->id;
                    if($emailsTable->save($email))
                    {
                        $this->redirect(['controller' => 'Login', 'action' => 'index']);
                        $this->Flash->success('Se ha registrado con éxito!');
                    }
                }
            }
        }
    }
}