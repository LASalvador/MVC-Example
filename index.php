<?php 
	require_once __DIR__.'/vendor/autoload.php';

	use App\Router;

	$app = new Router();
	//rota para home da ETC
	$app->get('/',function(){
		return \App\Controller\AppController::index();
	});
	// rota para carregar about da ETC 
	$app->get('/about',function(){
		return \App\Controller\AppController::about();
	});
	// rota para carregar o form IAGPOL
	$app->get('/IAGPOL',function(){
		return \App\Controller\AppController::loadForm('IAGPOL');
	});
	// rota para enviar o form IAGPOL
	$app->post('/IAGPOL',function(){
		return \App\Controller\AppController::submitFormIAGPOL();
	});
	// rota para carregar o information do IAGPOL
	$app->get('/IAGPOL/Information', function() {
		return \App\Controller\AppController::loadInformation('IAGPOL');
	});
	//rota para cerregar o output do IAGPOL
	$app->get('/IAGPOL/Output',function(){
		return \App\Controller\AppController::loadOuput('IAGPOL');
	});

	$app->run();
	
?>
