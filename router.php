<?php
switch (htmlspecialchars($_GET['p'] ?? 'home')){
case 'home';
    include "pages/home.view.php";
    break;
case 'add-task';
    include "pages/add-task.view.php";
    break;
case 'delete-task';
    include "pages/delete-task.view.php";
    break;
case 'complete-task';
    include "pages/complete-task.view.php";
    break;
case 'edit-task';
    include "pages/edit-task.view.php";
    break;

default:
    include "pages/error.view.php";
}