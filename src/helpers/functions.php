<?php

    function get_path() {
        $path = parse_url($_SERVER['REQUEST_URI'])['path'];
        return $path;
    }

    function get_method() {
        $method = $_SERVER['REQUEST_METHOD'];
        return $method;
    }

    function deps($path) {
        include $path;
    }

    function component($component, $props = []) {
        extract($props);
        include "views/components/".$component.".php";
    }

    function dd($variable) {
        echo "<pre/>";
        print_r($variable);
    }

    function slot($content) {
        echo $content;
    }

    function get_content($path) {
        ob_start();
        include $path;
        $content = ob_get_clean();
        ob_flush();
        return $content;
    }

    function current_page() {
        return parse_url($_SERVER['REQUEST_URI'])['path'];
    }