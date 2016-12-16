<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\ORM\TableRegistry;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class EmergenciesController extends AppController
{
	public function edit($id)
	{
		$emergency  = $this->Emergencies->find('all')
			->where(['Emergencies.id' => $id])
			->contain(['Communes']);

		$comunas  = $this->Emergencies->Communes->find('all');

		$this->set(compact('id'));
		$this->set(compact('emergency'));
		$this->set(compact('comunas'));
		
		$datos = $this->request->data;
		if($this->request->is('post'))
		{
			debug($datos);
			$emergenciesTable = TableRegistry::get('Emergencies'); 
			$emergency = $emergenciesTable->get($datos['id']);

	        $emergency->commune_id 					= $datos['emergency_commune'];
	        $emergency->nombre_emergencia 			= $datos['emergency_name'];
	        $emergency->gravedad_emergencia 		= $datos['emergency_gravity'];
	        $emergency->descripcion_emergencia 		= $datos['emergency_description'];

	        $emergenciesTable->save($emergency);
	        return $this->redirect(["Controller" => "Emergencies", "Action" => "View", $datos['id']]);
		}
	}

	public function view($id)
	{
		$emergency = $this->Emergencies->find('all')
			->where(['Emergencies.id' => $id]);

		foreach ($emergency as $e){}

		if($e->estado_emergencia == 2)
		{
			return $this->redirect("/administrators/view");
		}
		else if($e->estado_emergencia == 0)
		{
			return $this->redirect("/administrators/view");
		}
		else
		{
			$missions = $this->Emergencies->Missions->find('all')
				->where(['Missions.emergency_id' => $e->id]);

			$this->set(compact('emergency'));
			$this->set(compact('missions'));
			$this->set(compact('id'));
		}
	}

	public function add()
	{
		$this->loadModel('Communes');
		$comunas = $this->Communes->find('all');
		$this->set(compact('comunas'));

		$datos = $this->request->data;
		$sesion = $this->request->session();
		if($this->request->is('post'))
		{
			$tablaEmergencias  	= TableRegistry::get('Emergencies');
	        $emergencies 		= $this->Emergencies->newEntity();

	        $emergencies->user_id 					= $sesion->read('User.id');
	        $emergencies->commune_id 				= $datos['emergency_commune'];
	        $emergencies->nombre_emergencia 		= $datos['emergency_name'];
	        $emergencies->gravedad_emergencia 		= $datos['emergency_gravity'];
	        $emergencies->estado_emergencia 		= 0;
	        $emergencies->descripcion_emergencia 	= $datos['emergency_description'];

	        $tablaEmergencias->save($emergencies);
		}
	}
}