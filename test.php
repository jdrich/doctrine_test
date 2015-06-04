<?php

// Symfony's YAML parser is complaining about some shit.
error_reporting( E_ALL & ~E_DEPRECATED );

require_once 'vendor/autoload.php';
require_once 'bootstrap.php';

$products = $doctrine->getRepository('EAS\Product')->findAll();

foreach($products as $product) {
    var_dump($product->getName());
}

$user = $doctrine->getRepository('EAS\User')->findOneBy(['name' => 'jonathan']);

echo $user->getReportedBugs()[0]->getStatus();

echo $user->getAssignedBugs()[0]->getDescription();

$bug = $doctrine->getRepository('EAS\Bug')->findBy(['status' => 'new'])[0];

var_dump($bug->getProducts()[0]->getName());

/*$bug = new EAS\Bug();
$bug->setEngineer($user);
$bug->setReporter($user);
$bug->addProduct($product);
$bug->setStatus('new');
$bug->setDescription('You ain\'t know shit');

$doctrine->persist($bug);
$doctrine->flush();

echo $bug->getId();
*/
