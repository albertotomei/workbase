<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap($e)
    {
    	$eventManager   = $e->getApplication()->getEventManager();
		$serviceManager = $e->getApplication()->getServiceManager();
		$config         = $serviceManager->get('config');
		
        $e->getApplication()->getEventManager()->getSharedManager()->attach('Zend\Mvc\Controller\AbstractController', 'dispatch', function($e) use ($config) {
        	$controller      = $e->getTarget();
	        $controllerClass = get_class($controller);
	        $moduleNamespace = substr($controllerClass, 0, strpos($controllerClass, '\\'));
			
			if( isset($config['view_manager']['module_layouts'][$moduleNamespace]) )
                $controller->layout($config['view_manager']['module_layouts'][$moduleNamespace]);
        }, 100 );
		
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
