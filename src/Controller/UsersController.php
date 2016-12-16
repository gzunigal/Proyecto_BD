<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {    
    }

    public function edit()
    {
        if ($this->request->is('post')) {
            $this->loadModel('Users');

            $user = $this->request->session()->read('User.Entity');

            $data = $this->request->data;

            $user->name = $data['user_name'];
            $user->surname = $data['user_surname'];
            $user->email = $data['user_email'];
            $user->commune_id = $data['communes'];

            if($this->Users->save($user)){
                $session = $this->request->session();
                $session->write('User',$user->toArray());
                $session->write('User.isEncargado',$user->hasMissions());
                $session->write('User.Entity',$user);

                $rol = "voluntario";
                if($user->admin==1){
                    $rol="admin";
                }elseif($user->hasMissions()){
                    $rol="encargado";
                }
                $session->write('User.rol',$rol);

                $this->Flash->success('Se ha actualizado con éxito!');
                return $this->redirect(["controller"=>"Users","action"=>"edit"]);

            }else{
                $this->Flash->error('No se ha podido actualizar');
            }

        }

        $this->loadModel('Abilities');
        $this->loadModel('Communes');

        if(!$this->request->session()->check('User.id')) return $this->redirect($this->referer());

        $user = $this->request->session()->read('User.Entity');

        $habUser = $user->getAbilities();
        $abilities = $this->Abilities->find('all');
        $communes = $this->Communes->find('all');

        $this->set(compact('habUser'));
        $this->set(compact('abilities'));
        $this->set(compact('communes'));
        

    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        
    }
}
