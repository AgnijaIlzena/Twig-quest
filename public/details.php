<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Zoe';

echo $twig->render('details.html.twig', ['name' => $name]);
