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

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager; // This line is required

class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['login', 'logout']);
    }

     public function index()
     {
        $this->set('users', $this->Users->find('all'));
    }

    public function view($id)
    { 
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

  public function login()
  
{         
	if (!$this->czlek) {   
$this->layout='admin';
$this->set('nologin', 1);
}
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Zła nazwa lub hasło'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
           function adminstreams($id) { 
	      	if ($this->czlek) { 		     $this->redirect('/');

	      	$this->layout='admin';
	      		      	$this->set('adminStreamsActive', 'active');

 	 $this->loadModel('Streams');  
  $streams=$this->Streams->find()->where('Streams.owners=1')->order('Streams.kolejnosc asc')->all()->toArray();
	 $this->set('streams', $streams);
	 
	 
	  $skrypt=array('adminstreams');
	    $this->set('skrypt', $skrypt);
	    
	     }
 	    else { $this->layout='admin';
$this->set('nologin', 1); }
    }
    
   
   
     function userstreams($id) { 
	     $this->redirect('/');
	      	if ($this->czlek) { 	
	      	$this->layout='admin';
	      	$this->set('userStreamsActive', 'active');
 	 $this->loadModel('Streams');  
  $streams=$this->Streams->find()->where('Streams.owners=2')->order('Streams.kolejnosc asc')->all()->toArray();
	 $this->set('streams', $streams);
	 
	 
	 
	  $skrypt=array('userstreams');
	    $this->set('skrypt', $skrypt);
	    
	     }
 	    else { $this->layout='admin';
$this->set('nologin', 1); }
    }
       



function streamupdate() { 
		$this->autoRender = false;
 
// my_connection is defined in your database config
$conn = ConnectionManager::get('default');
 
 
 $this->loadModel('Streams');


	
	if ($this->czlek['admin']==1) { 
		
		if ($_POST['funkcja']=='update') { 
	
	$update=$conn->execute('UPDATE mails set '.$_POST['co'].'="'.addslashes($_POST['wartosc']).'" where id='.$_POST['id'].'');
	$mails=$this->Mails->find()->where('')->order('Mails.mail_id desc');
     Cache::write('mails', $mails);
     
		}
		
		if ($_POST['funkcja']=='usun') { 
 	$update=$conn->execute('DELETE FROM streams  where id='.$_POST['id'].'');
$streams=$this->Streams->find()->where('')->order('Streams.kolejnosc asc');
     Cache::write('streams', $streams);

  	 
		}
		
		if ($_POST['funkcja']=='active') { 
			
			 	$update=$conn->execute('UPDATE streams set active='.$_POST['co'].' where id='.$_POST['id'].''); 
	$mails=$this->Mails->find()->where('')->order('Mails.mail_id desc');
     Cache::write('mails', $mails);
 

		}
		
		if ($_POST['funkcja']=='useradd') { 
			
			$update=$conn->execute("INSERT INTO streams set name='".addslashes($_POST['name'])."', address='".addslashes($_POST['address'])."', owners=2");
$streams=$this->Streams->find()->where('')->order('Streams.kolejnosc asc');
     Cache::write('streams', $streams);
			
			
		}
		
		if ($_POST['funkcja']=='add') { 
			
foreach ($_POST['streamname'] as $key=>$value) { 
 	$nazwa=$value;
	$adres=$_POST['streamaddress'][$key];
	$kolejnosc=$_POST['streamkolejnosc'][$key];
	$update=$conn->execute("INSERT INTO streams set name='".addslashes($nazwa)."', address='".addslashes($adres)."', kolejnosc='".$kolejnosc."', owners=1");
	
}    
$streams=$this->Streams->find()->where('')->order('Streams.kolejnosc asc');
     Cache::write('streams', $streams);
		}
		
	}
	
	
	
}



function mailupdate() { 
		$this->autoRender = false;
 
// my_connection is defined in your database config
$conn = ConnectionManager::get('default');
 
 
 $this->loadModel('Mails');

 		
		if ($_POST['funkcja']=='active') { 
			
			 	$update=$conn->execute('UPDATE mails set active='.$_POST['co'].' where id='.$_POST['id'].''); 
 
 

		}
		 
		
	}
	
	
	
 

    /* SLIDES */
    
  function slides() { 
	    	$this->layout='admin';
	    	$this->set('slidesActive', 'active');
	    	if ($this->czlek['admin']==1) { 
		    	$skrypt=array('2dmin0/slides/slides');
	    $this->set('skrypt', $skrypt);

	      	$this->layout='admin';
	      	$this->loadModel('Slides'); 
$wyjazdy=$this->Slides->find('all', array('order'=>'Slides.published desc, Slides.kolejnosc asc'));
	 $this->set('slides', $wyjazdy); 	     }
	    else { $this->layout='admin';
$this->set('nologin', 1); }

    }
    
         

}






 
    