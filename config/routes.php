<?php

use wfm\Router;

Router::add('^(?P<lang>[a-z]+)?/?$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<lang>[a-z]+)?/?creative/?$', ['controller' => 'Creative', 'action' => 'view']);
Router::add('^(?P<lang>[a-z]+)?/?official/?$', ['controller' => 'Official', 'action' => 'view']);

Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');
Router::add('^(?P<lang>[a-z]+)/(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');
