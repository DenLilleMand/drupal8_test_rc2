<?php


namespace Drupal\simple\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Form\FormStateInterface;

/*
 * Provides my simple block.
 *
 * @Block(
 *   id = "simple_block",
 *   admin_label = @Translation("My Simple Block")
 * )
 */
class SimpleBlock extends BlockBase  {
  /*
   *{@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('hello world!')
    );
  }

  /*
   *{@inheritdoc}
   */
  public function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIfHasPermission($account, 'access content');
  }

  /*
   *{@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    $form['hellothere'] = array(
      '#type' => 'tel',
      '#title' => $this->t('Your phone number')
    );
    return $form;
  }

  /*
   *{@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    
  
  }

}
