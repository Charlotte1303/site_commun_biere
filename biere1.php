<?php
//1 Données
$title = "biere1";
$css = "biere.css";
require_once 'app/model/connexionBDD.php';

//2 Générer Vue
$currentPage = 'biere1';
ob_start();
include 'app\view\biere1.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';