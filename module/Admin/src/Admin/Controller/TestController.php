<?php
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TestController extends AbstractActionController
{
    public function indexAction(){
    	die(__CLASS__."/".__FUNCTION__);
        //return new ViewModel();
    }
	
	public function testAction(){
    	die(__CLASS__."/".__FUNCTION__);
        //return new ViewModel();
    }
}
