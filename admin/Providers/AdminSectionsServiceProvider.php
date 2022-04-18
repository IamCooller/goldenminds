<?php

namespace Admin\Providers;

use Illuminate\Routing\Router;
use SleepingOwl\Admin\Contracts\Navigation\NavigationInterface;
use SleepingOwl\Admin\Contracts\Template\MetaInterface;
use SleepingOwl\Admin\Contracts\Widgets\WidgetsRegistryInterface;
use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider {
    /**
     * @var array
     */
    protected $widgets = [
        \Admin\Widgets\DashboardMap::class,
        \Admin\Widgets\NavigationNotifications::class,
        \Admin\Widgets\NavigationUserBlock::class,
    ];

    /**
     * @var array
     */

    protected $sections = [
     /*    'App\Model\Company'   => 'Admin\Http\Sections\Companies', */
        /* 'App\Model\Country'   => 'Admin\Http\Sections\Countries', */
        /* 'App\Model\Page'      => 'Admin\Http\Sections\Pages', */
      /*   'App\Model\PageOrder' => 'Admin\Http\Sections\PageOrders',
        'App\Model\Post'      => 'Admin\Http\Sections\Posts', */

        'App\Model\Structura'  => 'Admin\Http\Sections\Structura',
        'App\Model\History'  => 'Admin\Http\Sections\History',
        'App\Model\Guidance'  => 'Admin\Http\Sections\Guidance',
        'App\Model\Departament'  => 'Admin\Http\Sections\Departament',
        'App\Model\Vacancy'  => 'Admin\Http\Sections\Vacancy',
        'App\Model\Regulations'  => 'Admin\Http\Sections\Regulations',
        'App\Model\Constitutive'  => 'Admin\Http\Sections\Constitutive',
        
        'App\Model\License'  => 'Admin\Http\Sections\License',
        'App\Model\ISO'  => 'Admin\Http\Sections\ISO',
        'App\Model\Mainstream'  => 'Admin\Http\Sections\Mainstream',
        'App\Model\Projects'  => 'Admin\Http\Sections\Projects',
        'App\Model\Tenders'  => 'Admin\Http\Sections\Tenders',
       
        
        'App\Model\ContactMain'  => 'Admin\Http\Sections\Contact',
        'App\Model\News2' => 'Admin\Http\Sections\News2',
        'App\Model\Virtual' => 'Admin\Http\Sections\Virtual',
        
        'App\Model\PhotoGallery'  => 'Admin\Http\Sections\PhotoGallery',
        'App\Model\VideoGallery'  => 'Admin\Http\Sections\VideoGallery',
        'App\Model\Options'  => 'Admin\Http\Sections\Options',
        'App\Model\HomePage'  => 'Admin\Http\Sections\HomePage',
        'App\Model\FromsCallback'  => 'Admin\Http\Sections\FromsCallback',
/*         'App\Model\Contact5'       => 'Admin\Http\Sections\Contacts5',
        'App\Model\Contact6'       => 'Admin\Http\Sections\TabbedDataTablesAsync',
        'App\Model\NewsTabsBadges' => 'Admin\Http\Sections\TabsBadges', */

/* 
        'App\Model\Forms\Form'       => 'Admin\Http\Sections\Forms\Forms',
        'App\Model\Forms\FormButton' => 'Admin\Http\Sections\Forms\FormButtons',
 */

        'App\Role' => 'Admin\Http\Sections\Roles',
        'App\User' => 'Admin\Http\Sections\Users',


      /*   'App\Model\DataTables\NewsEditableColumns'    => 'Admin\Http\Sections\DataTables\EditableColumns',
        'App\Model\DataTables\NewsRefreshAsync'       => 'Admin\Http\Sections\DataTables\RefreshAsync',
        'App\Model\DataTables\NewsActions'            => 'Admin\Http\Sections\DataTables\Actions',
        'App\Model\DataTables\CountryStopPageRefresh' => 'Admin\Http\Sections\DataTables\StopPageRefresh',
 */
       /*  'App\SomeModel' => 'Admin\Http\Sections\SomeModelSection', */
       'App\Models\Fragment' => 'Admin\Http\Sections\Translation', 
    ];

    /**
     * @param \SleepingOwl\Admin\Admin $admin
     *
     * @return void
     */
    public function boot( \SleepingOwl\Admin\Admin $admin ) {


        $this->loadViewsFrom( base_path( "admin/resources/views" ), 'admin' );
        $this->registerPolicies( 'Admin\\Policies\\' );

        $this->app->call( [ $this, 'registerRoutes' ] );
        $this->app->call( [ $this, 'registerNavigation' ] );

        parent::boot( $admin );

        $this->app->call( [ $this, 'registerViews' ] );
        $this->app->call( [ $this, 'registerMediaPackages' ] );
    }

    /**
     * @param NavigationInterface $navigation
     */
    public function registerNavigation( NavigationInterface $navigation ) {

        require base_path( 'admin/navigation.php' );
    }

    /**
     * @param WidgetsRegistryInterface $widgetsRegistry
     */
    public function registerViews( WidgetsRegistryInterface $widgetsRegistry ) {
        foreach ( $this->widgets as $widget ) {
            $widgetsRegistry->registerWidget( $widget );
        }
    }

    /**
     * @param Router $router
     */
    public function registerRoutes( Router $router ) {
        $router->group( [
            'prefix'     => config( 'sleeping_owl.url_prefix' ),
            'middleware' => config( 'sleeping_owl.middleware' )
        ], function ( $router ) {
            require base_path( 'admin/Http/routes.php' );
        } );
    }

    /**
     * @param MetaInterface $meta
     */
    public function registerMediaPackages( MetaInterface $meta ) {
        $packages = $meta->assets()->packageManager();

        require base_path( 'admin/assets.php' );
    }

       
}
