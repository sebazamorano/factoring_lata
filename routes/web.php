<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clientes/cotiza', 'HomeController@cotiza')->name('cotiza');
Route::get('/profile', 'ProfileController@index')->name('profile.index');
Route::resource('/clientes', 'ClienteController')->middleware('auth');
Route::resource('/ejecutivos', 'EjecutivoController')->middleware('auth');
Route::resource('/factories', 'FactoryController')->middleware('auth');
Route::resource('/administradores', 'AdministradorController')
    ->middleware('auth');
Route::get('mis-ofertas', 'HomeController@misOfertas')->name('mis-ofertas')->middleware('auth');

Route::get('/xml', function () {
// archivo XML de EnvioDTE que se generará
    $archivo = 'xml/certificado/set_pruebas/set_pruebas_basico.xml';
//$archivo = 'xml/certificado/set_pruebas/set_pruebas_factura_exenta.xml';
//$archivo = 'xml/certificado/etapa_simulacion.xml';

// Cargar EnvioDTE y extraer arreglo con datos de carátula y DTEs
    $EnvioDte = new \sasco\LibreDTE\Sii\EnvioDte();
    $EnvioDte->loadXML(file_get_contents(storage_path('app/DTE_76160781_33_5188.xml')));
    $Caratula = $EnvioDte->getCaratula();
    $Documentos = $EnvioDte->getDocumentos();

// procesar cada DTEs e ir agregándolo al PDF
    foreach ($Documentos as $DTE) {
        if (!$DTE->getDatos())
            die('No se pudieron obtener los datos del DTE');
        $pdf = new \sasco\LibreDTE\Sii\Dte\PDF\Dte(false); // =false hoja carta, =true papel contínuo (false por defecto si no se pasa)
        $pdf->setFooterText();
        $pdf->setLogo(asset('img/brand/blue.png')); // debe ser PNG!
        $pdf->setResolucion(['FchResol'=>$Caratula['FchResol'], 'NroResol'=>$Caratula['NroResol']]);
        //$pdf->setCedible(true);
        $pdf->agregar($DTE->getDatos(), $DTE->getTED());
        $pdf->Output(storage_path('/dte_'.$Caratula['RutEmisor'].'_'.$DTE->getID().'.pdf'), 'F');
    }

});
