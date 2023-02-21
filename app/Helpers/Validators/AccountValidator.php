<?php

class AccountValidator
{
  public array $errors = [];

  /**
   * Validate the given data
   * Return false if the validation succeeds and an array of errors if it fails
   * @param array $data
   */
  public function validate($data)
  {
    if (!$this->required($data['firstname']) && !$this->max($data['firstname'], 25)) {

      $this->errors['Firstname'][] = 'Firstname must be less than 25 characters';
    }
    if (!$this->max($data['infix'], 25)) {
      $this->errors['Infix'][] = 'Infix must be less than 25 characters';
    }
    if (!$this->required($data['lastname']) && !$this->max($data['lastname'], 25)) {
      $this->errors['Lastname'][] = 'Lastname must be less than 25 characters';
    }
    if (!$this->required($data['email']) && !$this->max($data['email'], 255) && !$this->email($data['email'])) {
      $this->errors['Email'][] = 'Email must be less than 255 characters';
    }
    if (!$this->required($data['password']) && !$this->max($data['password'], 255)) {
      $this->errors['Password'][] = 'Password must be less than 255 characters';
    }
    return $this->hasErrors() ? $this->errors : false;
  }

  public function hasErrors()
  {
    return !empty($this->errors);
  }

  public function required($value)
  {
    return !empty($value);
  }

  public function email($value)
  {
    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }


  public function max($value, $length)
  {
    return strlen($value) <= $length;
  }
}
