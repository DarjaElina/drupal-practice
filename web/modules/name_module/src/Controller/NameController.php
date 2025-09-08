<?php

namespace Drupal\name_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class NameController extends ControllerBase {

  public function hello() {
    return new Response('Hello Daria');
  }
}