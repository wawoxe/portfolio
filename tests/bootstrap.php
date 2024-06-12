<?php

declare(strict_types=1);

/*
 * (c) Mykyta Melnyk <wawoxe@proton.me>
 *
 * SEE LICENSE IN ROOT FOLDER.
 */

use Symfony\Component\Dotenv\Dotenv;

require \dirname(__DIR__) . '/vendor/autoload.php';

if (\method_exists(Dotenv::class, 'bootEnv')) {
    (new Dotenv)->bootEnv(\dirname(__DIR__) . '/.env');
}

if ($_SERVER['APP_DEBUG']) {
    \umask(0o000);
}
