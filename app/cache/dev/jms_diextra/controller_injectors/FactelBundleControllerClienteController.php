<?php

namespace FactelBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ClienteController__JMSInjector
{
    public static function inject($container) {
        require_once 'C:\\xampp\\htdocs\\FactelCliente\\app\\cache\\dev/jms_diextra/proxies/FactelBundle-Controller-ClienteController.php';
        $a = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('FactelBundle\\Controller\\ClienteController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'clientesAction' => array(0 => 'security.access.method_interceptor'), 'createAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'), 'cargarClienteAction' => array(0 => 'security.access.method_interceptor'), 'createClienteAction' => array(0 => 'security.access.method_interceptor'), 'showAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'updateAction' => array(0 => 'security.access.method_interceptor'), 'deleteAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxye3e06dd7_a6f69229ec425e08c9ac13409566e61ba22071ec\__CG__\FactelBundle\Controller\ClienteController();
        $instance->__CGInterception__setLoader($a);
        return $instance;
    }
}
