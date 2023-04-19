<?php

use Gems\App\classes\JWT;

// use Gems\App\classes\JWT;

require_once 'include/config.php';
require_once 'classes/JWT.php';

// use Gems\App\include\config;
// On crée le header
$header = [
  'typ' => 'JWT',
  'alg' => 'HS256'
];

// On crée le contenu (payload)
$payload = [
  'id_utilisateur' => 123,
  'role' => [
    'admin',
    'client'
  ],
  'email' => 'contact@demo.fr'
];

$jwt = new JWT();

$token = $jwt->generate($header, $payload, SECRET);

echo $token;
