<?php

use Gems\App\classes\JWT;

const TOKEN = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZF91dGlsaXNhdGV1ciI6MTIzLCJyb2xlIjpbImFkbWluIiwiY2xpZW50Il0sImVtYWlsIjoiY29udGFjdEBkZW1vLmZyIiwiaWF0IjoxNjgxNTc2NjI4LCJleHAiOjE2ODE1NzY2ODh9.bDje8R7lgGcbE6SYCtlR4_jCNvyLM7ISe-eHhImPB98';

require_once 'include/config.php';
require_once 'classes/JWT.php';

$jwt = new JWT();
var_dump($jwt->isValid(TOKEN));
