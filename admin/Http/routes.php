<?php

$router->get('/information', ['as' => 'admin.information', function (\SleepingOwl\Admin\Contracts\Template\TemplateInterface $template) {

    return $template->view(
	    'Define your information here.',
        'Information'
    );

}]);

$router->get('/cache', '\Admin\Http\Controllers\Controller@clear');

$router->post('/news/export.json', ['as' => 'admin.news.export', function (\Illuminate\Http\Request $request) {

    $response = new \Illuminate\Http\JsonResponse([
		'title' => 'Congratulation! You exported news.',
		'news' => App\Model\News5::whereIn('id', $request->_id)->get()
	]);

	return $response;

}]);

$config = array_merge(config('translation-manager.route'), ['namespace' => 'Barryvdh\TranslationManager']);
Route::group($config, function($router)
{
    $router->get('view/{groupKey?}', 'Controller@getView')->where('groupKey', '.*');
    $router->get('/{groupKey?}', 'Controller@getIndex')->where('groupKey', '.*');
    $router->post('/add/{groupKey}', 'Controller@postAdd')->where('groupKey', '.*');
    $router->post('/edit/{groupKey}', 'Controller@postEdit')->where('groupKey', '.*');
    $router->post('/groups/add', 'Controller@postAddGroup');
    $router->post('/delete/{groupKey}/{translationKey}', 'Controller@postDelete')->where('groupKey', '.*');
    $router->post('/import', 'Controller@postImport');
    $router->post('/find', 'Controller@postFind');
    $router->post('/locales/add', 'Controller@postAddLocale');
    $router->post('/locales/remove', 'Controller@postRemoveLocale');
    $router->post('/publish/{groupKey}', 'Controller@postPublish')->where('groupKey', '.*');
    $router->post('/translate-missing', 'Controller@postTranslateMissing');
});