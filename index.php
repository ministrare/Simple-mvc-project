<?php

require_once "models/post.php";
require_once "controllers/home.php";
require_once "controllers/post.php";

/**
 * Dispatching the world
 */

if(isset($_GET['action']) && $_GET['action'] != "") {
    if($_GET['action'] == "new_post") {
        $postController = new postController();
        $postController->create();
    }
} else {
    $homeController = new homeController();
    $homeController->index();
}