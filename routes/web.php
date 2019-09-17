<?php



//RUTAS DE INICIO
Route::view('/','home')->name ('home');
Route::view('/Mision','homeContent.mision')->name ('mision');
Route::view('/Vision','homeContent.vision')->name ('vision');
Route::view('/Valores','homeContent.valores')->name ('valores');


//RUTAS LOGIN 
Auth::routes();
Auth::routes(['register' => false, 'reset'=>false]);


//RUTAS PARA ASOCIADO INFORMACION 
Route ::get('/Dashboard/asociado','AsociadoController@index')->name('dash.asociado.index');
Route ::get('/Dashboard/asociado/editar/','AsociadoController@edit')->name('dash.asociado.edit');
Route ::patch('/Asociado/Editar/{asociado}','AsociadoController@update')->name('dash.asociado.update');

//RUTAS PARA MI LINEA DESENDIENTE
Route ::get('/Dashboard/Linea','LineaController@index')->name('dash.linea.index');

//RUTAS PARA CLIENTE 
Route ::get('/Dashboard/cliente','ClienteController@index')->name('dash.cliente.index');
Route ::delete('/Dashboard/cliente/{cliente}','ClienteController@destroy')->name('dash.cliente.destroy');
Route ::get('/Dashboard/{cliente}/editar','ClienteController@edit')->name('dash.cliente.edit');
Route ::patch('/Cliente/Editar/{cliente}','ClienteController@update')->name('dash.cliente.update');
Route ::get('/Cliente/Crear','ClienteController@create')->name('dash.cliente.create');
Route ::post('/Clientes','ClienteController@store')->name('dash.cliente.store');

//RUTAS PARA PRODUCTO
Route ::get('/Dashboard/Productos','StoreController@index')->name('dash.store.index');
Route ::get('/Dashboard/Producto/{id}','StoreController@show')->name('dash.store.show'); 

//RUTAS PARA CARRITO 
Route ::get('/Dashboard/Compras','CarController@index')->name('dash.store.car.index');
Route ::get('/Dashboard/Compras/Add/{producto}','CarController@add')->name('dash.store.car.add');
Route ::get('/Dashboard/Compras/Eliminar/{producto}','CarController@delete')->name('dash.store.car.delete');
Route ::get('/Dashboard/Compras/Vaciar','CarController@trash')->name('dash.store.car.trash');
Route ::get('/Dashboard/Compras/Actualizar/{producto}/{cantidad?}','CarController@update')->name('dash.store.car.update');
Route ::get('/Dashboard/Compras/Orden','CarController@orden')->name('dash.store.car.orden');

//RUTAS PARA META 
Route ::get('/Dashboard/Meta','MetaController@index')->name('dash.meta.index');
Route ::get('/Dashboard/Mi Saldo','SaldoController@index')->name('dash.meta.saldo.index');

//RuTAS PARA PIRAMIDE
Route ::get('/Dashboard/Piramide','PiramideController@index')->name('dash.piramide.index');
Route ::get('/Dashboard/Piramide/Nivel/{id}','PiramideController@show')->name('dash.piramide.show'); 

//RUTAS PARA PAYPAL 

Route::get('Paypal/Pagar', 'PaypalController@postPayment')->name('paypal.payment');
Route::get('Paypal/Estado', 'PaypalController@getPaymentStatus')->name('paypal.status');
Route::get('Paypal/compra', 'PaypalController@compra')->name('paypal.compra');

//RUTA PARA MIS COMPRAS
Route ::get('/Dashboard/Mis Compras','ComprasController@index')->name('dash.store.compra.index');
Route ::get('/Dashboard/Mis Compras/{id}','ComprasController@show')->name('dash.store.compra.show');

//RUTA PARA Ventas
Route ::get('/Dashboard/Mis Ventas','VentaController@index')->name('dash.venta.index');
Route ::get('/Dashboard/Mis Ventas/{id}','VentaController@show')->name('dash.venta.show');












Route ::get('/Dashboard/Inventario','DashboardController@inventario')->name('dash.inventario');
Route ::get('/Dashboard/MCompra','DashboardController@mcompra')->name('dash.mcompra');
Route ::get('/Dashboard/Venta','DashboardController@venta')->name('dash.venta'); 







//UPDATES PARA DASHBOARD


Route ::get('/Proyectos','ProjectController@index')->name('projects.index');
Route ::get('/Proyectos/crear','ProjectController@crear')->name('projects.crear');
Route ::get('/Proyectos/{project}/editar','ProjectController@edit')->name('projects.edit');
Route ::patch('/Proyectos/{project}','ProjectController@update')->name('projects.update');
Route ::post('/Proyectos','ProjectController@store')->name('projects.store');
Route ::get('/Proyectos/{id}','ProjectController@show')->name('projects.show'); 
Route ::delete('/Proyectos/{project}','ProjectController@destroy')->name('projects.destroy');






// Route::resource('portafolio','ProjectController')
// ->parameters(['portafolio'=>'project'])
// ->names('projects');




//Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/Unirse/Parte1','SolicitanteController@formpart1')->name ('unirse1');
// Route::get('/Unirse2','SolicitanteController@formpart2')->name ('unirse2');
// Route::get('/Unirse3','SolicitanteController@formpart3')->name ('unirse3');
// Route ::post('/Unirse','SolicitanteController@store')->name('unirse.store');

// Route::post('contact','MessageController@store')->name('messages.store');


// Route::view('/Quienes-somos','about')->name ('about');