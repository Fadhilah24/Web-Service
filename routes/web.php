<?php
use Illuminate\Http\Request;
/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
	//$router->get('/kolam/input','RegistrasikolamController@input');
	$router->get('/kolam/input', [
    'as' => 'inputkolam', 'uses' => 'RegistrasikolamController@input'
]);
	$router->post("/register", "RegisterController@register");
	$router->post("/login", "AuthController@login");
	$router->get('/logout', 'LogoutController@logout');
	$router->get("/loginpage", "LoginController@index");
	$router->get("/user", "UserController@index");
	$router->get("/regus", "RegisterController@regus");
	//$router->get('/kolam/daftar', 'ListkolamController@lists');
	$router->get('kolam/daftar', [
    'as' => 'daftar', 'uses' => 'ListkolamController@lists'
]);
    $router->get("/kolam/daftarjson", "ListkolamController@listsjson");
	$router->get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
     return 'cache cleared';
});
	$router->get('/', function () {
     return redirect('/loginpage');
});
	//$router->get('/sensor', 'SensorkolamController@index');
	$router->get('sensor/sensorkolam/{id}', [
    'as' => 'sensorkolam', 'uses' => 'SensorkolamController@showsensor'
]);
	$router->get('sensor/sensorjson/{id}', 'PostsensorkolamController@lists');
	$router->get('sensor/sensorjson', 'PostsensorkolamController@index');
	$router->get('kolam/editkolam1/{id}', 'RegistrasikolamController@editkolam');
	$router->get('/sensor/sensorkolam/kolam/tambahikanform/{id}', 'JenisikanController@index');
	$router->get('/sensor/sensorkolam/kolam/infoikan/{id}', 'TampiljenisikanController@lists');
	$router->get('/sensor/sensorkolam/kolam/infoikanjson', 'TampiljenisikanController@listsjson');
	
	$router->get('/sensor/sensorkolam/sensorph/{id}', 'RekapController@ph');
	$router->get('/sensor/sensorkolam/sensordo/{id}', 'RekapController@oksigen');
	$router->get('/sensor/sensorkolam/sensorsuhu/{id}', 'RekapController@suhu');
	$router->get('kolam/editkolam', [
    'as' => 'editkolam1', 'uses' => 'EditkolamController@index'
]);
	$router->get('/sensor/sensorkolam1/chart/{id}', 'ChartController@index');
	$router->get('/sensor/sensorkolam1/chartdo/{id}', 'ChartController@showdo');
	$router->get('/sensor/sensorkolam1/chartsuhu/{id}', 'ChartController@showsuhu');
	$router->get('/sensor/sensorkolam1/chartjson/{id}', 'ChartController@phjson');
	$router->get('/sensor/sensorkolam1/chartdojson/{id}', 'ChartController@dojson');
	$router->get('/sensor/sensorkolam1/chartsuhujson/{id}', 'ChartController@suhujson');
    $router->post('/kolam/create', 'RegistrasikolamController@create');
	$router->get('/kolam/input', 'RegistrasikolamController@input');
	$router->post('/sensor/create', 'SensorkolamController@create');
    $router->get('/kolam/{id}', 'RegistrasikolamController@show');
    $router->post('/kolam/updatekolam/{id}', 'RegistrasikolamController@update');
	$router->put('/kolam/updatekolam/{id}', 'RegistrasikolamController@update');
	$router->post('/kolam/tambahikan/{id}', 'JenisikanController@update');
	$router->put('/kolam/tambahikan/{id}', 'JenisikanController@update');
	$router->put('/sensor/updatesensor/{id}', 'SensorkolamController@update');
	$router->post('/sensor/updatesensor/{id}', 'PostsensorkolamController@create');
    $router->get('/kolam/hapus/{id}', 'RegistrasikolamController@destroy');
	$router->delete('/kolam/hapus/{id}', 'RegistrasikolamController@destroy');

