<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=blog',
    'username' => 'lukesherwood',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];

// CREATE TABLE user
// (
//     id               int             auto_increment,
//     username         varchar(55)     not null,
//     password         varchar(255)    not null, 
//     auth_key         varchar(255)    not null, 
//     access_token     varchar(255)    not null, 
//     PRIMARY KEY (id)
// );
