<?php

/**
 * Fast PHP based router to allow running custom PHP app in subdirectory.
 *
 * Include this file in the beginning of index.php:
 * include 'router.php';
 */

$components = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

if ($components[0] === 'services') {
  include 'services/index.php';
  exit();
}
