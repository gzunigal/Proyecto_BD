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
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class HomeController extends AppController
{


    public function index()
    {
        $session = $this->request->session();
        if ($session->check('User')) {
            echo "Existo";
            if($session->read('User.admin') == '1'){
                return $this->redirect(['controller' => 'Administrator', 'action' => 'index']);
            }elseif ($session->read('User.isEncargado') == 1) {
                return $this->redirect(['controller' => 'Manager', 'action' => 'index']);
            }else{
                return $this->redirect(['controller' => 'Volunteer', 'action' => 'index']);
            }
        }else{
            return $this->redirect(['controller' => 'Login', 'action' => 'index']);
        }
    }

    public function admin(){

    }

    public function encargado(){

    }

    public function voluntario(){

    }
}