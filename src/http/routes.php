<?php
    $router = new XPA\Classes\Router();

    $page_controller = new XPA\Classes\PageController();

    $router->add_route("/", [$page_controller, 'home'], "GET");
    $router->add_route("/about", [$page_controller, 'about'], "GET");

    $router->route(get_path(), get_method()); 