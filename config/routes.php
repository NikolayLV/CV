<?php

use wfm\Router;

Router::add('^(?P<lang>[a-z]+)?/?$', ['controller' => 'Main', 'action' => 'index']);

Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');
Router::add('^(?P<lang>[a-z]+)/(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');
