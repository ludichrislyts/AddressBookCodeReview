<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__./../src/Contact.php;

    session_start();

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider), array('twig.path' => __DIR__.'/../views'
    ));
    // homepage -- Displays contacts, provides add/clear buttons
    $app->get('/', function() use ($app){
        return $app['twig']->render('contacts.html.twig', array('contacts' => Contact::getAll()));
    });
    // create_contact page -- Confirms contact add, displays contact info
    $app->post('/create_contact', function() use ($app){
        return $app['twig']->render('create_contact.html.twig', array('new_contact' => $contact));
    });
    // delete_contacts page -- Clears contact list, confirms clear
    $app->post('delete_contacts', function() use ($app){
        return $app['twig']->render('delete_contacts.html.twig', array);
    });

    return $app;

?>
