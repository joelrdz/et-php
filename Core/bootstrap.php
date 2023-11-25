<?php
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Core/App.php';
require 'Core/Request.php';
require 'Core/Router.php';
require 'Models/Task.php';
require 'functions.php';

App::set('config', require 'config.php');
App::set('database', new QueryBuilder(
  Connection::start(App::get('config')['database'])
));
