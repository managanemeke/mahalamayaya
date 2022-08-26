<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=192.168.88.102;dbname=daba',
    'username' => 'hasa',
    'password' => 'pasa',
    'charset' => 'utf8mb4',
    'on afterOpen' => function($event) {
        $ma = "ALTER DATABASE daba CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";
        $na = "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci;";
        $event->sender->createCommand($ma)->execute();
    },

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
