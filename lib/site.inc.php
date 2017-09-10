<?php
/**
 * @file
 * A file loaded for all pages on the site.
 */

require __DIR__ . "/../vendor/autoload.php";
$dotenv = new Dotenv\Dotenv(__DIR__ . "/../");
$dotenv->load();

$site = new Bogdan\Site();
$localize = require 'localize.inc.php';
if(is_callable($localize)) {
  $localize($site);
}
