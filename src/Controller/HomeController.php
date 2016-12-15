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
        if ($session->check('User.id')) {
            if($session->read('User.rol') == 'admin'){
                return $this->redirect(['controller' => 'Administrators', 'action' => 'index']);
            }elseif ($session->read('User.rol') == "encargado") {
                return $this->redirect(['controller' => 'Managers', 'action' => 'index']);
            }else{
                return $this->redirect(['controller' => 'Volunteers', 'action' => 'index']);
            }
        }else{
            return $this->redirect(['controller' => 'Login', 'action' => 'index']);
        }
    }
}