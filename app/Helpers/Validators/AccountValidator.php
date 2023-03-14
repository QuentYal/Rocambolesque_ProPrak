<?php

namespace App\Helpers\Validators;

use Raoul\Validator\Validator;


class AccountValidator extends Validator
{
  public function rules()
  {
    return [
      'firstname' => ['required', 'max:25'],
      'infix' => ['max:25'],
      'lastname' => ['required', 'max:25'],
      // 'email' => ['required', 'max:255', 'email'],
      'password' => ['max:255']
    ];
  }

  public function messages()
  {
    return [
      'firstname.required' => 'Firstname is required',
      'firstname.max' => 'Firstname must be less than 25 characters',
      'infix.max' => 'Infix must be less than 25 characters',
      'lastname.required' => 'Lastname is required',
      'lastname.max' => 'Lastname must be less than 25 characters',
      'email.required' => 'Email is required',
      'email.max' => 'Email must be less than 255 characters',
      'email.email' => 'Email must be a valid email address',
      'password.required' => 'Password is required',
      'password.max' => 'Password must be less than 255 characters'
    ];
  }
}











// class AccountValidator
// {
//   public array $errors = [];

//   /**
//    * Validate the given data
//    * Return false if the validation succeeds and an array of errors if it fails
//    * @param array $data
//    */
//   public function validate($data)
//   {
//     if (!$this->required($data['firstname']) && !$this->max($data['firstname'], 25)) {

//       $this->errors['Firstname'][] = 'Firstname must be less than 25 characters';
//     }
//     if (!$this->max($data['infix'], 25)) {
//       $this->errors['Infix'][] = 'Infix must be less than 25 characters';
//     }
//     if (!$this->required($data['lastname']) && !$this->max($data['lastname'], 25)) {
//       $this->errors['Lastname'][] = 'Lastname must be less than 25 characters';
//     }
//     if (!$this->required($data['email']) && !$this->max($data['email'], 255) && !$this->email($data['email'])) {
//       $this->errors['Email'][] = 'Email must be less than 255 characters';
//     }
//     if (!$this->required($data['password']) && !$this->max($data['password'], 255)) {
//       $this->errors['Password'][] = 'Password must be less than 255 characters';
//     }
//     return $this->hasErrors() ? $this->errors : false;
//   }

//   public function hasErrors()
//   {
//     return !empty($this->errors);
//   }

//   public function required($value)
//   {
//     return !empty($value);
//   }

//   public function email($value)
//   {
//     return filter_var($value, FILTER_VALIDATE_EMAIL);
//   }


//   public function max($value, $length)
//   {
//     return strlen($value) <= $length;
//   }
// }