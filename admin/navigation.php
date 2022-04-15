<?php

/**
 * @var \SleepingOwl\Admin\Contracts\Navigation\NavigationInterface $navigation
 * @see http://sleepingowladmin.ru/docs/menu_configuration
 */

use SleepingOwl\Admin\Navigation\Page;
use App\User;
$navigation->setFromArray([
    
    [
        'title' => "Об институте",
        'icon' => 'fa fa-university',
        'priority' =>'0',
        'pages' => [
            (new Page(\App\Model\Mainstream::class))
                ->setIcon('fa fa-rocket')
                ->setPriority(0),
                (new Page(\App\Model\Structura::class))
                ->setIcon('fa fa-child')
                ->setPriority(1),
                (new Page(\App\Model\License::class))
                ->setIcon('fa fa-clone')
                ->setPriority(2),
                (new Page(\App\Model\ISO::class))
                ->setIcon('fa fa-bookmark')
                ->setPriority(3),
                (new Page(\App\Model\History::class))
                ->setIcon('fa fa-history')
                ->setPriority(4),
                (new Page(\App\Model\Guidance::class))
                ->setIcon('fa fa-user-circle')
                ->setPriority(4),
                (new Page(\App\Model\Departament::class))
                ->setIcon('fa fa-th-list')
                ->setPriority(4),
                (new Page(\App\Model\Vacancy::class))
                ->setIcon('fa fa-user-plus')
                ->setPriority(4),
                (new Page(\App\Model\Regulations::class))
                ->setIcon('fa fa-file')
                ->setPriority(4),
          /*       (new Page(\App\Model\Constitutive::class))
                ->setIcon('fa fa-clipboard')
                ->setPriority(4), */
        ]
    ],

  /*   [
        'title' => "Contacts",
        'icon' => 'fa fa-credit-card',
        'priority' =>'1000',
        'pages' => [
            (new Page(\App\Model\Contact::class))
                ->setIcon('fa fa-fax')
                ->setPriority(0),
            (new Page(\App\Model\Contact2::class))
                ->setIcon('fa fa-fax')
                ->setPriority(100),
            (new Page(\App\Model\Contact3::class))
                ->setIcon('fa fa-fax')
                ->setPriority(200),
            (new Page(\App\Model\Contact4::class))
                ->setIcon('fa fa-fax')
                ->setPriority(400),
        ]
    ], */
    [
        'title' => "Пресс-центр",
        'icon' => 'fa fa-rss',
        'priority' =>'1000',
       /*  (new Page(\App\User::class))
                  ->setPriority(100)
                  ->setIcon('fas fa-users')
                   ->setUrl('users')
                ->setAccessLogic(function (Page $page) {
                        return auth()->user()->isSuperAdmin();
                    }), */
        'pages' => [

            (new Page(\App\Model\News2::class))
            ->setIcon('fa fa-newspaper')
            ->setPriority(0)
           ,

            (new Page(\App\Model\PhotoGallery::class))
            ->setIcon('fa fa-paint-brush')
            ->setPriority(0),
            'accessLogic' => function ($page) {
                                return $page->isActive();
                		      },

            (new Page(\App\Model\VideoGallery::class))
            ->setIcon('fa fa-video')
            ->setPriority(0),
            
/* 
            (new Page(\App\Model\News::class))
                ->setIcon('fa fa-newspaper-o')
                ->setPriority(0),
           
            (new Page(\App\Model\News3::class))
                ->setIcon('fa fa-newspaper-o')
                ->setPriority(20),
            (new Page(\App\Model\News4::class))
                ->setIcon('fa fa-newspaper-o')
                ->setPriority(30),
            (new Page(\App\Model\News5::class))
                ->setIcon('fa fa-newspaper-o')
                ->setPriority(40) */
        ],
       
    ],
    [
        'title' => "Tabs Examples",
        'icon' => 'fa fa-newspaper-o',
        'priority' =>'1000',
        'id'=>'tabs-examples',

    ],

    [
        'title' => "Forms & Buttons",
        'icon' => 'fa fa-newspaper-o',
        'priority' =>'1001',
        'id'=>'forms-examples',
    ],
//    [
//        'title' => "JavaScript",
//        'icon' => 'glyphicon glyphicon-blackboard',
//        'priority' =>'1001',
//        'id'=>'javascript',
//        'badge' => new \SleepingOwl\Admin\Navigation\Badge('New')
//    ],
/* 
    [
        'title' => "DataTables",
        'icon' => 'glyphicon glyphicon-blackboard',
        'priority' =>'1001',
        'id'=>'datatables',
        'badge' => new \SleepingOwl\Admin\Navigation\Badge('New')
    ], */


    [
        'title' => 'Разрешения',
        'icon' => 'fa fa-american-sign-language-interpreting',
        'priority' =>'10000',
        'pages' => [
            (new Page(\App\User::class))
                ->setIcon('fa fa-user')
                ->setPriority(0)
                ->setAccessLogic(function (Page $page) {
                    return auth()->user()->isSuperAdmin();
                }),
            (new Page(\App\Role::class))
                ->setIcon('fa fa-group')
                ->setPriority(100)
                ->setAccessLogic(function (Page $page) {
                    return auth()->user()->isSuperAdmin();
                })
        ]
            ],


            
   /*  [
        'title' => 'Переводы',
        'icon' => 'fa fa-indent',
        'priority' =>'10000',
        'page' => '/translations'
    ] */


   // [
        //    'title' => 'Content',
        //    'pages' => [
        //
        //        \App\User::class,
        //
        //        // or
        //
        //        (new Page(\App\User::class))
        //            ->setPriority(100)
        //            ->setIcon('fas fa-users')
        //            ->setUrl('users')
        //            ->setAccessLogic(function (Page $page) {
        //                return auth()->user()->isSuperAdmin();
        //            }),
        //
        //        // or
        //
        //        new Page([
        //            'title'    => 'News',
        //            'priority' => 200,
        //            'model'    => \App\News::class
        //        ]),
]);
