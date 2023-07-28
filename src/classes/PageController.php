<?php
    namespace XPA\Classes;

    class PageController {
        
        public function home() {
            $content = get_content("views/pages/home.php");
            $title = "Home";
            include "views/layouts/app.php";
        }

        public function about() {
            $content = get_content("views/pages/about.php");
            $title = "About";
            include "views/layouts/app.php";
        }
    }