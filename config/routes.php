<?php

$routes->get('/', function() {
    TutoController::index();
});

$routes->get('/tutorial', function() {
    TutoController::tutorial();
});

$routes->get('/hiekkalaatikko', function() {
    TutoController::sandbox();
});

$routes->get('/signup', function() {
    UserController::signup();
});

$routes->post('/allFavorites', function() {
    MemoController::allFavorites();
});

$routes->post('/deleteFavorite', function() {
    MemoController::deleteFavorite();
});

$routes->get('/memo', function() {
    MemoController::memo();
});

$routes->post('/addToMemo', function() {
    MemoController::addToMemo();
});

$routes->post('/login', function() {
    UserController::login();
});

$routes->post('/logout', function() {
    UserController::logout();
});

$routes->get('/getUser', function() {
    UserController::getUser();
});

$routes->post('/addUser', function() {
    UserController::addUser();
});

$routes->get('/allTutorials', function() {
    TutoController::allTutorials();
});

$routes->post('/findTutorial', function() {
    TutoController::findTutorial();
});

$routes->post('/addTutorial', function() {
    TutoController::addTutorial();
});

$routes->post('/updateTutorial', function() {
    TutoController::updateTutorial();
});

$routes->post('/deleteTutorial', function() {
    TutoController::deleteTutorial();
});

$routes->post('/allReviews', function() {
    ReviewController::allReviews();
});

$routes->post('/addReview', function() {
    ReviewController::addReview();
});

$routes->get('/message', function() {
    TutoController::message();
});









