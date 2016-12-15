<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

class AbilitiesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
    }

    public function add()
    {
        $abilities = $this->Abilities->find('all');

        $this->set(compact('abilities'));

        echo '<br><br><br>';

        $datos = $this->request->data;
        if($this->request->is('post'))
        {
            $abilitiesTable = TableRegistry::get('Abilities');

            $ability = $abilitiesTable->newEntity();

            $ability->nombre_habilidad = $datos['ability_name'];
            $ability->descripcion_actividad = $datos['ability_description'];

            $abilitiesTable->save($ability);
        }
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
?>