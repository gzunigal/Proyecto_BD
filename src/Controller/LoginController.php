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
        $session = $this->request->session();
        if ($session->check('User')) {
            return $this->redirect(['controller' => 'Login', 'action' => 'logout']);
        }
        if ($this->request->is('post')) {
            $this->loadModel('Users');
            $query = $this->Users->find()
                    ->where([
                        'username'=>$formData['username'],
                        'password'=>(new DefaultPasswordHasher)->hash($formData['password'])
                    ])
                    ->first();

                if ($query){
                    $user = $query->toArray();
                    $session->write('User.isAdmin','propietario');
                    $session->write('User',$user);

                    return $this->redirect(['controller' => 'Home', 'action' => 'index']);
                }else{
                    $this->Flash->set('Nombre de usuario o contraseña incorrecta');
                }

            
        }

        return $this->redirect(['controller' => 'Login', 'action' => 'index']);
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    public function register(){
        $this->loadModel('Communes');
        $communes = $this->Communes->find('all');
        $this->set(compact('communes'));
        $usersTable     = TableRegistry::get('Users');
        
        debug($usersTable->getUserByRun('18622421-3'));
        /*Aquí se "agarran" los datos del formulario*/
        if ($this->request->is('post')) 
        {
            $hasher = new DefaultPasswordHasher();

            
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
            $user->password         = $hasher->hash($datosUsuario['user_password']);
            $user->name             = $datosUsuario['user_name'];
            $user->surname          = $datosUsuario['user_surname'];
            $user->run              = $datosUsuario['user_rut'];
            $user->disponibilidad   = $datosUsuario['availability'];
            $user->admin            = 0;
            $rut = explode('-', $datosUsuario['user_rut']);
            print_r($rut);

            


            if(count($rut) == 2 && is_numeric($rut[0]))
            {
                if(strlen($rut[1]) && (is_numeric($rut[1]) || $rut[1] == 'k'))
                {
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
                else
                {
                    $this->Flash->error('Formato de rut incorrecto');
                }
            }
            else
            {
                    $this->Flash->error('Formato de rut incorrecto');
            }
        }
    }
}