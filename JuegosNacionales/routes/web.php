<?php

/*
Universidad de Costa Rica
Informática Empresarial
IF7102 - Multimedios
Prof. Jonathan Rojas
Proyecto Inscripciones Juegos Nacionales ICODER
Estudiantes:
Paula Álvarez Barrantes – B40301
Elí Hidalgo Quesada - B43429
Stephanie Rojas Alfaro – A54827
I Ciclo, 2017

Clase: web
Clase que se encarga de registrar las rutas web para la aplicación. Estas rutas son cagadas por el RouteServiceProvider 
en conjunto con el grupo de los middleware web.
*/

Route::get('/', function () {
    return view('/auth/login');
});


Route::get('dashboard', function () {
    return view('dashboard');
});


Route::get('adminMasterPage', function () {
    return view('adminMasterPage');
});

// Rutas que se encargan del IMEC de Categoría.
Route::get('/category', 'categoryController@index');
Route::get('/insertCategory', 'categoryController@insertCategory');
Route::post('/insertNewCategory', 'categoryController@insertNewCategory');
Route::get('/deleteCategory/{IDCategory}', 'categoryController@deleteCategory');

//Rutas que se encargan del IMEC de Edición.
Route::get('/edition', 'editionController@index');
Route::get('/insertEdition', 'editionController@insertEdition');
Route::post('/insertNewEdition', 'editionController@insertNewEdition');
Route::get('/deleteEdition/{IDEdition}', 'editionController@deleteEdition');

//Rutas que se encargan del IMEC de Pruebas.
Route::get('/test', 'testController@index');
Route::get('/insertTest', 'testController@insertTest');
Route::post('/insertNewTest', 'testController@insertNewTest');
Route::get('/deleteTest/{IDTest}', 'testController@deleteTest');

//Rutas que se encargan del IMEC de Deportes.
Route::get('/sport', 'sportController@index');
Route::get('/insertSport', 'sportController@insertSport');
Route::post('/insertNewSport', 'sportController@insertNewSport');
Route::get('/editSport/{IDSport}', 'sportController@editSport');
Route::get('/deleteSport/{IDSport}', 'sportController@deleteSport');

// Rutas que se encargan del IMEC de Usuario.


// Rutas que se encargan del IMEC de Canton.
Route::get('/canton', 'cantonController@index');
Route::get('/addCanton', 'cantonController@add');
Route::post('/newCanton','cantonController@newCanton');
Route::get('/deleteCanton/{IDCanton}', 'cantonController@delete');

// Rutas que se encargan del IMEC de Provincia.
Route::post('/newProvince','provinceController@newProvince');
Route::get('/addProvince', 'provinceController@add');
Route::get('/province', 'provinceController@index');

Route::get('/enroll', 'enrollController@index');


Route::get('/userType', 'userTypeController@index');

Route::get('/report', 'reportController@index');



Route::get('/specif', 'enrollController@add');
Route::get('/insert', 'enrollController@insert');
Route::get('/doc', 'enrollController@doc');
Route::get('/addUser', 'userController@add');

Route::get('/addUserType', 'userController@add');

Route::get('/showP', 'personController@index');

Auth::routes();

Route::get('/home', 'userWelcomeController@index');
Route::get('/specification', 'specificationController@index');
Route::get('/show', 'showController@index');
Route::get('/userLog', 'UserLogController@index');
Route::get('/user', 'userController@index');
Route::get('/userAdd', 'userController@add');
Route::get('/newCo','personController@insertNew');
Route::get('/newCoa','personController@insertNewA');
Route::get('/newDoc','personController@documents');
Route::get('/querys','personController@querys');
Route::post('/insertR','roleController@insertRole');


Route::get('/newSportType','sportTypeController@newSportType');
Route::get('/newSport','sportController@insertSport');
Route::get('/newSC','sportCategoryController@insertSportCategory');
Route::get('/newEdition','editionController@insertEdition');
Route::get('/newSportEdition','sportEditionController@insertSportEdition');
Route::post('canton/new/', 'cantonController@newCanton');
Route::get('/addRol','roleController@insertView');
Route::get('/showRol','roleController@showRole');

Route::get('/deleteRole/{IDRole}','roleController@deleteRole');

Route::get('/showU','userController@showUser');

Route::get('/upRol','roleController@updateRole');
