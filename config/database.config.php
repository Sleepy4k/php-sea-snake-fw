<?php

return [
  /*
  |--------------------------------------------------------------------------
  | Database Connection
  |--------------------------------------------------------------------------
  |
  | Here you may specify which of the database connections below you wish
  | to use as your default connection for all database work. Of course
  | you may use many connections at once using the Database library.
  |
  */
  'default' => env('DB_CONNECTION', 'mysql'),

  /*
  |--------------------------------------------------------------------------
  | Database Connections
  |--------------------------------------------------------------------------
  |
  | Here are each of the database connections setup for your application.
  | Of course, examples of configuring each database platform that is
  | supported by Snake is shown below to make development simple.
  |
  |
  | All database work in Snake is done through the PHP PDO facilities
  | so make sure you have the driver for your particular database of
  | choice installed on your machine before you begin development.
  |
  */
  'connections' => [
    'mysql' => [
      'host' => env('DB_HOST', 'localhost'),
      'name' => env('DB_NAME', 'snake'),
      'username' => env('DB_USERNAME', 'root'),
      'password' => env('DB_PASSWORD', '')
    ],
    'sqlite' => [
      'name' => env('DB_NAME', 'snake'),
      'username' => env('DB_USERNAME', 'root'),
      'password' => env('DB_PASSWORD', '')
    ],
    'pgsql' => [
      'host' => env('DB_HOST', 'localhost'),
      'name' => env('DB_NAME', 'snake'),
      'username' => env('DB_USERNAME', 'root'),
      'password' => env('DB_PASSWORD', '')
    ],
    'sqlsrv' => [
      'host' => env('DB_HOST', 'localhost'),
      'name' => env('DB_NAME', 'snake'),
      'username' => env('DB_USERNAME', 'root'),
      'password' => env('DB_PASSWORD', '')
    ]
  ]
];
