<?php

use Puppers\User;
use Puppers\Dog;


$app->get('/dev', function($req, $res, $args){
    $users = User::all();
    return $res->withStatus(200)->withJson($users);
});

$app->get('/dev/dogs', function($req, $res, $args){
    $dogs = Dog::all();
    return $res->withStatus(200)->withJson($dogs);
});

//$app->get('/dev/dogs/{dog_id}', function($req, $res, $args){
//    $dog = Dog::find($args["dog_id"]);
//    return $res->withStatus(200)->withJson($dog);
//});

$app->delete('/dev/dogs/{dog_id}', function($req, $res, $args){
    $dog = Dog::find($args["dog_id"]);
    $dog = delete();
    return $res->withStatus(200)->withJson($dog);
});


$app->post('/dev/dogs', function($req, $res, $args){
    $post = $req->getParsedBody();
    $createDog = Dog::create(['name' => $post["name"], 'age' => $post["age"], 'breed' => $post["breed"]]);
    return $res->withStatus(200)->withJson($createDog);
});




?>
