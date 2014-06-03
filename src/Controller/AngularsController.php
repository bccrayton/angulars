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
    $output[] = $this->sample_2();
    $output[] = $this->sample_3();
    $output[] = $this->sample_4();
    $output[] = $this->sample_5();

    return $output;
  }

  /**
   * Sample 1: Basic Binding.
   */
  function sample_1() {
    $data = array();
    $data['sample1'] = array(
      '#type' => 'details',
      '#title' => t('Sample 1: Basic Binding'),
      '#open' => TRUE,
      '#attributes' => array(
        'id' => 's1_container',
        'ng-controller' => 's1_ctrl',
      ),
      '#attached' => array(
        'js' => array(drupal_get_path('module', 'angulars') . '/js/sample1.js'),
      ),
    );
    // Content.
    $data['sample1']['input'] = array(
      '#type' => 'textfield',
      '#title' => 'Your name',
      '#attributes' => array('ng-model' => 's1.message'),
    );
    $data['sample1']['content'] = array(
      '#markup' => '<p>Hello {{s1.message}}!</p>',
    );
    return $data;
  }

  /**
   * Sample 2: Basic Filter.
   */
  function sample_2() {
    $data = array();
    $data['sample2'] = array(
      '#type' => 'details',
      '#title' => t('Sample 2: Basic Filter'),
      '#open' => TRUE,
      '#attributes' => array(
        'id' => 's2_container',
        'ng-controller' => 's2_ctrl',
      ),
      '#attached' => array(
        'js' => array(drupal_get_path('module', 'angulars') . '/js/sample2.js'),
      ),
    );
    // Content.
    $data['sample2']['input'] = array(
      '#type' => 'textfield',
      '#title' => 'Any text',
      '#attributes' => array('ng-model' => 's2.message'),
    );
    $data['sample2']['content'] = array(
      '#markup' => '<p><b>Reversed:</b> {{s2.message | s2_reverse}}</p>',
    );
    return $data;
  }

  /**
   * Sample 3: Basic Directive.
   */
  function sample_3() {
    $data = array();
    $data['sample3'] = array(
      '#type' => 'details',
      '#title' => t('Sample 3: Basic Directive'),
      '#open' => TRUE,
      '#attributes' => array(
        'id' => 's3_container',
      ),
      '#attached' => array(
        'js' => array(drupal_get_path('module', 'angulars') . '/js/sample3.js'),
      ),
    );
    // Content.
    $data['sample3']['content'] = array(
      '#markup' => '<p><s3directive></s3directive></p><p><span s3directivea></span></p><p><span class="s3directiveb"></span></p>',
    );
    return $data;
  }

  /**
   * Sample 4: Basic Behaviors.
   */
  function sample_4() {
    $data = array();
    $data['sample4'] = array(
      '#type' => 'details',
      '#title' => t('Sample 4: Basic Behaviors'),
      '#open' => TRUE,
      '#description' => 'Alert with message is tied to button click behavior.',
      '#attributes' => array(
        'id' => 's4_container',
      ),
      '#attached' => array(
        'js' => array(drupal_get_path('module', 'angulars') . '/js/sample4.js'),
      ),
    );
    // Content.
    $data['sample4']['button'] = array(
      '#type' => 'button',
      '#value' => t('Click me'),
      '#attributes' => array(
        'click' => '',
      ),
    );
    $data['sample4']['content'] = array(
      '#markup' => '',
    );
    return $data;
  }

  /**
   * Sample 5: Isolate Scope.
   */
  function sample_5() {
    $data = array();
    $data['sample5'] = array(
      '#type' => 'details',
      '#title' => t('Sample 5: Isolate Scope'),
      '#open' => TRUE,
      '#description' => 'Fields with same class and directive but with different (isolate) scopes.',
      '#attributes' => array(
        'id' => 's5_container',
        'ng-controller' => 's5_ctrl',
      ),
      '#attached' => array(
        'js' => array(drupal_get_path('module', 'angulars') . '/js/sample5.js'),
      ),
    );
    // Content.
    $data['sample5']['content1'] = array(
      '#markup' => '<p><span class="s5" initext="Initial value 1"></span></p>',
    );
    $data['sample5']['content2'] = array(
      '#markup' => '<p><span class="s5" initext="Initial value 2"></span></p>',
    );
    $data['sample5']['button'] = array(
      '#type' => 'button',
      '#value' => t('Set common value'),
      '#attributes' => array(
        'class' => array('s5button'),
        'ng-click' => 's5setCommon();',
      ),
    );
    return $data;
  }



}  
