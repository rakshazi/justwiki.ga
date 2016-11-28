<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require './vendor/autoload.php';
$justWiki = new \Rakshazi\JustWiki;
$page = $_GET['ajax'] ?? 1;
$items = $justWiki->get($page);

include  ($page > 1) ? 'feed.php' : 'frontend.php';
