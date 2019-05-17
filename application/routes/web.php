<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware("redir.notauth")->group(function(){
   Route::get("/home","Application\HomeController@index")->name("home");
   Route::any("/logout","Application\LoginController@logout")->name("logout");
});

Route::middleware(["redir.notauth"])->prefix('adm')->group(function(){
   Route::get("/cadastrar","Adm\AdmController@cadastrar")->name("adm.cadastrar");
});

Route::middleware("redir.auth")->group(function(){
   Route::get('/',function(){
      return redirect('login');
   } );
   Route::post('/recuperar', "Application\LoginController@index")->name('recuperar_senha');
   Route::any('/cadastro', "Application\CadastrousuarioController@index")->name('cadastro_usuario');
   Route::any('/login', "Application\LoginController@index")->name('login');
   Route::post('/makeLogin', "Application\LoginController@makeLogin");
   Route::post('/makeCadastro', "Application\CadastrousuarioController@makeCadastro")->name('make_cadastro');
});