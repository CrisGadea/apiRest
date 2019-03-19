<?php

use Slim\Http\Request;
use Slim\Http\Response;
// Routes

$app->get('/movies/{id}', 'MoviesController:show');

$app->get('/movies','MoviesController:index');



/*$app->get('/movies', function (Request $request, Response $response, array $args) {

	$data= json_decode(file_get_contents('templates/movies.json'));

	return $response->withJson($data);
});
*/
/*
$app->post('/movies','MoviesController:create');
$app->patch('/movies/{id}','MoviesController:edit');
$app->put('/movies/{id}','MoviesController:replace');
$app->delete('/movies/{id}','MoviesController:delete');
$app->get('/plans','PlansController');






$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
*/


