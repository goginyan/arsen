<?php
require_once __DIR__ . "/models/News.php";

$items = News::getALL();

include_once __DIR__ . "/views/index.php";