<?php
define("WEBROOT","http://localhost:8000/");
define("ROOT", str_replace("public","",$_SERVER['DOCUMENT_ROOT']));
require_once ROOT."config/helpers.php";
require_once ROOT."config/validator.php";
// require_once ROOT."view/partials/header.php";

require_once("../routes/web/router.php");

