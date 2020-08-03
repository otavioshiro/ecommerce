<?php 

//autoload do que meu projeto precisa
require_once("vendor/autoload.php");

//namespaces - pastas necessárias (que estão dentro do vendor) p/ o projeto funcionar
use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;

//trabalhar com rotas usa o Slim
$app = new Slim();

$app->config('debug', true);

//rota p/ o funcionamento
$app->get('/', function(){

	$page = new Page();

	$page->setTpl("index");

});

//rota p/ o funcionamento de ADmin
$app->get('/admin', function(){

	$page = new PageAdmin();

	$page->setTpl("index");

});

//executa tudo
$app->run();

 ?>