<?php

namespace Drupal\angulars\Controller;

class AngularsController {
  public function content() {

    $output = array(
      '#attached' => array(
        'js' => array(
          'https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.7/angular.min.js',
          'core/misc/form.js',
          'core/misc/collapse.js',
        ),
      ),
    );

    $output[] = $this->sample_1();
    // $output[] = $this->sample_2();

    return $output;
  }

  /**
   * Sample 1: Basic Binding.
   */
  function sample_1() {
    $data = array();
    // Wrapper.
    $data['sample1'] = array(
      '#type' => 'details',
      '#title' => t('Sample 1: Basic Binding'),
      '#open' => TRUE,
      '#attributes' => array(
        'ng-controller' => 'firstCtrl',
      ),
      '#attached' => array(
        'js' => array(drupal_get_path('module', 'angulars') . '/js/sample1.js'),
      ),
    );
    // Content.
    $data['sample1']['content'] = array(
      '#markup' => '<p>Hello {{data.message}}!</p>',
    );
    $data['sample1']['input'] = array(
      '#type' => 'textfield',
      '#title' => 'Your name',
      '#attributes' => array('ng-model' => 'data.message'),
    );
    return $data;
  }

}  
