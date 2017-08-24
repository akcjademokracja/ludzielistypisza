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
use Cake\Event\Event;
 use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Cache\Cache;
use Cake\Datasource\ConnectionManager;

use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
      public $paginate = [
        'limit' => 20,
        'order' => [
            'Mails.mail_id' => 'desc'
        ]
    ];
      public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator', ['templates' => 'paginator-templates']);
   }

    public function home($id=null)
    { 		$this->loadModel('Mails');
	if ($_GET['pion']==1) { $where=''; $niemawhere=0; } else { if ($this->czlek) { } else { $where='Mails.active=1'; } $niemawhere=1; };
		if ($_GET['random']) { $order='RAND()'; $niemawhere=0; } else { 
			$order='Mails.mail_id desc';
		}
	 
/*
		$streams = Cache::read('streams');
		print_r($streams);
		if (count($streams)==0 and $niemawhere==1) {
 $streams=$this->Streams->find()->where('')->order(''.$order.'');
     Cache::write('streams', $streams);
}
else { 
			$streams=$this->Streams->find()->where(''.$where.'')->order(''.$order.'');

}
*/
 $mails=$this->Mails->find()->where(''.$where.'')->order(''.$order.'');
 
 $ilemails=$mails->count();
$this->set('ilemails', $ilemails);

 $this->paginate = [
        'limit' => 20,
        'order' => [
            'Mails.mail_id' => 'desc'
        ]
    ];
 	if (count($mails)>0) { 	$k=$mails->all()->toArray();
 		if ($_GET['mails']) { $mails->limit($_GET['mails']); }
      if ($_GET['elements']=='all') { $_SESSION['limit']=''; } else if ($_GET['elements']) { $_SESSION['limit']=$_GET['elements']; };
		if ($_SESSION['limit']) { 
			$this->paginate = [
        'limit' => 20,
        'order' => [
            'Mails.mail_id' => 'desc'
        ]
    ];
    $this->set('limit', $_SESSION['limit']);
		}
 		  $this->set('mails', $this->paginate($mails));
 		   }
 if ($id>0) { 
	$wpis=$this->Mails->findById($id)->first()->toArray();
	$this->set('wpis', $wpis);
}
$lastMail=$this->Mails->find()->order('Mails.mail_id desc')->first();
if (count($lastMail)>0) { 
$lastMail->toArray();


}
 if (time()-strtotime(''.$lastMail['created'].'')>900 or 1==1) { 
 	$url=''.$_SERVER['SPEAKOUT_MAILS_API'].'?id_newer='.$lastMail['mail_id'].'';
 
  $process = curl_init($url);
 curl_setopt($process, CURLOPT_USERPWD, "".$_SERVER['SPEAKOUT_USERNAME'].":".$_SERVER['SPEAKOUT_PASSWORD']."");
curl_setopt($process, CURLOPT_TIMEOUT, 30);
  curl_setopt($process, CURLOPT_POST, 0);
curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($process, CURLOPT_SSL_VERIFYPEER, false);

$return = curl_exec($process);
curl_close($process);
$streamsy=json_decode($return, true);
$streamsy   = array_reverse($streamsy);
  if (count($streamsy)>0) {  
	 $this->mailsTable = TableRegistry::get('Mails');
  $mails=array();
  	  foreach ($streamsy as $str) { 
	  	  $mailsy=array();
$mailsy['mail_id']=''.$str['id'].'';
$mailsy['subject']=''.addslashes($str['subject']).'';
$mailsy['firstname']=''.$str['firstname'].'';
$mailsy['created_at']=''.DATE('Y-m-d H:i:s', strtotime(''.$str['created_at'].'')).'';
$mailsy['created']=time();
$mailsy['body']=''.addslashes(mysql_escape_string($str['body'])).'';
$mailsy['active']=1;
array_push($mails, $mailsy);
   }
    	  	$addFeed = $this->mailsTable->newEntities($mails);
  	  	
	foreach ($addFeed as $entity) {
    $this->mailsTable->save($entity);
}

 

 }
 }

 	
	     }
}
