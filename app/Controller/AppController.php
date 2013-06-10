<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array(
        'Session',
        'Auth' => array(
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
            ),
            'authError' => 'Unauthorized Access'
            //'loginRedirect' => array('controller' => 'pages', 'action' => 'home'),
            //'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
            //'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
        ),
        'Acl'
    );
    public $helpers = array('Html', 'Form', 'Session');

    public function beforeRender() {
        $this->set('refer', $this->referer());
    }

    public function beforeFilter() {
        $this->Auth->allow('display');
        //$this->Auth->allow();
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'home');
        if (!is_null($this->Auth->User()) && $this->name != 'CakeError' && !$this->Acl->check(array(
                'model' => 'User',
                'foreign_key' => AuthComponent::user('id')),
                $this->name . '/' . $this->request->params['action']
        )) {


            // Optionally log an ACL deny message in auth.log
            CakeLog::write('auth', 'ACL DENY: ' . AuthComponent::user('username') .
                ' tried to access ' . $this->name . '/' .
                $this->request->params['action'] . '.'
            );

            $this->Session->setFlash('UNAUTHORIZED ACCESS');

            // Render the forbidden page instead of the current requested page
            echo $this->render('/Pages/forbidden');

            /**
             * Make sure we halt here, otherwise the forbidden message
             * is just shown above the content.
             */
            exit;
        }
    }
}
