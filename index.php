<?php
//INDICE DI REVISIONE: V2.0
//PER TESTERA IL CODICE SU UNA MACCHINA BISOGNA CREARE IL DATABASE: VEDI DOCUMENTAZIONE/MANUALE_GENERALE DATABASE SCHEMA PAGINA 11

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/autoload.php';
require __DIR__ . '/config.php';

$app = Application::instance(); 
$app->addRoutingMiddleware();

$errorMiddleware = $app->addErrorMiddleware(true, true, true);

$routerConf = new RouterConfigurator($app);
$routerConf->bootstrap();

$app->setBasePath(BASE_PATH);

$app->add(PageMiddleware::class);
$app->add(MenuMiddleware::class);
$app->add(FooterMiddleware::class);
$app->add(UIMessageMiddleware::class);
$app->add(SessionMiddleware::class);

$page = new Page();
PageConfigurator::instance()->setPage($page);

$app->run();