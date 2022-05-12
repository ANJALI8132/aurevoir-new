<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'dashboardcontroller@index');

Route::get('/dashboard', 'dashboardcontroller@index');

Route::post('/login', 'usercontroller@store');

Route::get('/icons', 'iconscontroller@index');

Route::get('/map', 'mapcontroller@index');

Route::get('/rtl', 'rtlcontroller@index');

Route::get('/tables', 'tablescontroller@index');

Route::get('/typography', 'typographycontroller@index');

Route::get('/upgrade', 'upgradecontroller@index');

Route::get('/user', 'usercontroller@index');

Route::get('/createplan', 'createplancontroller@index');

Route::post('/createplan', 'createplancontroller@store');

Route::get('/plan-manage', 'planmanagementcontroller@index');

//Route::get('/createuser', 'createusercontroller@index');

//Route::post('/createuser', 'createusercontroller@store');

Route::get('/user-manage', 'usermanagementcontroller@index');

Route::get('/activeuser', 'activeusercontroller@index');

Route::get('/upcoming', 'upcomingcontroller@index');

Route::get('/expired', 'expiredcontroller@index');

Route::get('/password', 'passwordcontroller@index');

Route::get('/bill', 'billcontroller@index');

Route::post('/bill', 'billcontroller@store');

Route::post('/user', 'usercontroller@store');

Route::get('/logout', 'usercontroller@logout');

Route::get('/', 'newscontroller@index');

Route::get('/news', 'newscontroller@index');

Route::get('/createnews', 'newscontroller@view');

Route::post('/createnewsaction', 'newscontroller@store');

Route::post('/updatenewsaction', 'newscontroller@update');

Route::get('/updatenews/{id}', 'newscontroller@edit');

Route::get('/deletenews/{id}', 'newscontroller@delete');

Route::get('/notifications', 'notificationscontroller@index');

Route::get('/createnotifications', 'notificationscontroller@view');

Route::post('/createnotificationsaction', 'notificationscontroller@store');

Route::post('/updatenotificationsaction', 'notificationscontroller@update');

Route::get('/updatenotifications/{id}', 'notificationscontroller@edit');

Route::get('/deletenotifications/{id}', 'notificationscontroller@delete');

Route::get('/gallery', 'gallerycontroller@index');

Route::get('/creategallery', 'gallerycontroller@view');

Route::post('/creategalleryaction', 'gallerycontroller@store');

Route::post('/updategalleryaction', 'gallerycontroller@update');

Route::get('/updategallery/{id}', 'gallerycontroller@edit');

Route::get('/deletegallery/{id}', 'gallerycontroller@delete');

Route::get('/career', 'careercontroller@index');

Route::get('/createcareer', 'careercontroller@view');

Route::post('/createcareeraction', 'careercontroller@store');

Route::post('/updatecareeraction', 'careercontroller@update');

Route::get('/updatecareer/{id}', 'careercontroller@edit');

Route::get('/deletecareer/{id}', 'careercontroller@delete');

Route::post('/passwordaction', 'passwordcontroller@store');





/*
Route::get('/dashboard', function () {
    return view('dashboard');
});

*/
