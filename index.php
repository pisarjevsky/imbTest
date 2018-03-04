<?php
require_once 'config/db.php';
require_once 'controllers/controller.php';
require_once 'views/view.php';

$ctrl = new IndexController();
$ctrl->renderView($connection);

