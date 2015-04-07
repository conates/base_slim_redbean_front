<?php 

include 'libraries/php-export-data.class.php';


$app->add(new \Slim\Middleware\HttpBasicAuthentication(array(
	"path" => "/admin",
    "realm" => "Protected", 
    "users" => array( 
        "user" => "pass" 
    ) 
)));


$app->get('/admin(/:page)',function($page=1) use ($app){

	/*$contact  	= R::count('contact');
	$all_data 	= getData($page,10);
	$totalPages = ceil($contact/10);*/


	//$paginator = array('totalPages'=>$totalPages,'current_page'=>$page);

	$app->render('../views/admin/index.php',array(
		'url' => SITE_URL,
		//'all_data' => $all_data,
		//'paginator' => $paginator
	));
})->name('paginator')->conditions(array('page' => '\d+'));



$app->get('/admin(/delete/:id)',function($id) use ($app){
		
	$delete = 	dataDelete($id);
	$app->response->redirect(SITE_URL.'/admin', 303);
});


$app->get('/admin/export-data-excel', function() use ($app){
	$data = exportDataExcel();
});