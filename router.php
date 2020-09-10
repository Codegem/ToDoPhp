<?php
switch (htmlspecialchars($_GET_['p'] ?? 'home')){
case 'home';
    include "pages/home.view.php";
    break;
case 'add-task';
    include "pages/add-task.view.php";
    break;
case 'delete';
    include "pages/delete-task.view.php";
    break;
case 'complete';
    include "pages/complete-task.view.php";
    break;
default:
    include "pages/error.view.php";
}