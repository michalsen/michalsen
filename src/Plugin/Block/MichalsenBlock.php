<?php

namespace Drupal\michalsen\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "michalsen_example",
 *   admin_label = @Translation("Example"),
 *   category = @Translation("michalsen")
 * )
 */
class MichalsenBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('Content goes here...'),
    ];

  }

}
