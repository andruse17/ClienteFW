<?php

namespace FactelBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class GuiaController__JMSInjector
{
    public static function inject($container) {
        require_once 'C:\\xampp\\htdocs\\FactelCliente\\app\\cache\\dev/jms_diextra/proxies/FactelBundle-Controller-GuiaController.php';
        $e = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('FactelBundle\\Controller\\GuiaController' => array('guiasAction' => array(0 => 'security.access.method_interceptor'), 'procesarAccion' => array(0 => 'security.access.method_interceptor'), 'sendEmail' => array(0 => 'security.access.method_interceptor'), 'createAction' => array(0 => 'security.access.method_interceptor'), 'descargarAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'), 'showAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxye3e06dd7_7ca78d186b02cccefed6652a23ee55b2fe8d99fb\__CG__\FactelBundle\Controller\GuiaController();
        $instance->__CGInterception__setLoader($e);
        return $instance;
    }
}