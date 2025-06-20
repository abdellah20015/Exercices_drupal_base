<?php

namespace Drupal\mon_crud_gsap\Controller;

use Drupal\Core\Controller\ControllerBase;

class CrudGsapController extends ControllerBase {
  public function content() {
    $build = [
      '#theme' => 'crud_gsap',
      '#attached' => [
        'library' => [
          'mon_crud_gsap/crud_gsap_assets',
        ],
      ],
    ];
    return $build;
  }
}
