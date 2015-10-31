<?php

/*
 *@file
 *Contains Drupal\simple\Controller\SimpleController.php
 */

namespace Drupal\simple\Controller;

class SimpleController {

  public function generate() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello world!')
    );
  }
}


