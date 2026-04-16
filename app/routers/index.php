<?php
//route par defaut
//Pattern:
//CTRL PageController (composite)
//Action: home
//view:page/home

//composite = qui permet de faire le lien entre les differents tables du projet

include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($conn);
