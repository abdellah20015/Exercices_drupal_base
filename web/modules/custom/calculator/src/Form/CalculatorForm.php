<?php

namespace Drupal\calculator\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CalculatorForm extends FormBase {

  public function getFormId() {
    return 'calculator_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['number1'] = [
      '#type' => 'number',
      '#title' => $this->t('Number 1'),
      '#required' => TRUE,
    ];

    $form['number2'] = [
      '#type' => 'number',
      '#title' => $this->t('Number 2'),
      '#required' => TRUE,
    ];

    $form['operation'] = [
      '#type' => 'select',
      '#title' => $this->t('Operation'),
      '#options' => [
        'add' => $this->t('Addition'),
        'sub' => $this->t('Subtraction'),
        'mul' => $this->t('Multiplication'),
        'div' => $this->t('Division'),
      ],
      '#required' => TRUE,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Calculate'),
    ];

    if ($result = $form_state->get('result')) {
      $form['result'] = [
        '#markup' => '<p><strong>' . $this->t('Result: @result', ['@result' => $result]) . '</strong></p>',
      ];
    }

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $num1 = $form_state->getValue('number1');
    $num2 = $form_state->getValue('number2');
    $operation = $form_state->getValue('operation');
    $result = '';

    switch ($operation) {
      case 'add':
        $result = $num1 + $num2;
        break;
      case 'sub':
        $result = $num1 - $num2;
        break;
      case 'mul':
        $result = $num1 * $num2;
        break;
      case 'div':
        $result = $num2 != 0 ? $num1 / $num2 : 'Error (division by zero)';
        break;
    }

    $form_state->setRebuild();
    $form_state->set('result', $result);
  }

}
