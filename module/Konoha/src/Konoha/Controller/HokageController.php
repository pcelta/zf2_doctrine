<?php

namespace Konoha\Controller;

use \Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class HokageController extends AbstractActionController
{

    public function defaultAction()
    {
        $em = $objectManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');
        echo 'chamou o hokage';
        die();
    }

    public function geninAction()
    {
        $nome = $this->params()->fromQuery('nome');
        return new ViewModel(array('nome' => $nome));
    }
}