<?php

namespace Drupal\gt_people\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for GT People routes.
 */
class GtPeopleController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
