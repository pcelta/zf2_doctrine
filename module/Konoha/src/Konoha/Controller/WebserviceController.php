<?php

namespace Konoha\Controller;

use \Zend\Mvc\Controller\AbstractActionController;
use Zend\Soap\AutoDiscover;

class WebserviceController extends AbstractActionController
{
    public function indexAction()
    {
        if (isset($_GET['wsdl'])) {
            $autodiscover = new \Zend\Soap\AutoDiscover();
            $autodiscover->setClass('Konoha\Model\Calculadora')
                ->setUri('http://zf2-brasil.dev/konoha/webservice/index');
            echo $autodiscover->toXml();
        } else {
            // pointing to the current file here
            $soap = new \Zend\Soap\Server("http://zf2-brasil.dev/konoha/webservice/index?wsdl");
            $soap->setClass('Konoha\Model\Calculadora');
            $soap->handle();
        }
        exit;
    }

    public function clientAction()
    {
        // canal de comunicacao com o webservice, apontar para a URL do WSDL

        $soap = new \Zend\Soap\Client("http://zf2-brasil.dev/konoha/webservice/index?wsdl");
        echo $soap->soma(1,1);
        exit;
    }
}