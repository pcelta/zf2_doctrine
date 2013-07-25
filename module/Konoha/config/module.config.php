<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Konoha\Controller\Hokage' => 'Konoha\Controller\HokageController',
        ),
    ),
    // routing
    'router' => array(
        'routes' => array(
            'konoha' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/konoha/[:controller[/:action[/]]]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Konoha\Controller',
                        'controller' => 'Hokage',
                        'action'     => 'default',
                        'module'     => 'konoha',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'konoha' => __DIR__ . '/../view/layouts/'.\Common\Factory\Theme::getInstance()->getLayoutName().'/themes/' . \Common\Factory\Theme::getInstance()->getThemeName(),
        ),
        'template_map' => array(
            'konoha/layout'           => __DIR__ . '/../view/layouts/'.\Common\Factory\Theme::getInstance()->getLayoutName().'/layout.phtml',
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            'konoha_model_entities' => array(
                'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Konoha/Model/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Konoha\Model\Entity' => 'konoha_model_entities'
                )
            )
        )
    )
);