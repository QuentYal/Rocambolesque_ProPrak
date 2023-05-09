<?php

use Raoul\Validator\Exceptions\ValidationException;
use App\Helpers\Validators\AccountValidator;

class AccountUpdate extends Controller
{
  private Account $AccountsUpdate;
  private User $User;

  public function __construct()
  {
    $this->AccountsUpdate = $this->model('Account');
    $this->User = $this->model('User');
  }

  public function index($id = null)
  {
    if ($id == null) {
      return $this->redirect('/');
    }
    $account = $this->AccountsUpdate->getAccount($id);
    if (!$account) {
      return $this->redirect('/');
    }
    $this->view('AccountPage/update-form', [
      'firstname' => $account->Firstname,
      'infix' => $account->Infix ?? null,
      'lastname' => $account->Lastname,
      'email' => $this->User->getEmail($id)->Email,
      'id' => $id,
    ]);
  }

  public function update($id = null)
  {
    if ($id == null) {
      return $this->redirect('/');
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      // try {
      //   (new AccountValidator())->validate($_POST);
      // } catch (ValidationException $e) {
      //   Session::flash('errors', $e->getErrors());
      //   Session::flash('old', $_POST);
      //   return $this->redirect("/accountupdate/{$id}");
      // } catch (Exception $e) {
      // }

      if (isset($_POST['password'])) {
        $new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $this->User->updatePassword($new_password, $id);
      }

      if (isset($_POST['email'])) {
        $this->User->updateEmail($_POST['email'], $id);
      }
      try {
        $this->AccountsUpdate->update($_POST, $id);
        Session::flash('message', 'succesvol geupdate');
        return $this->redirect('/');
      } catch (Exception $e) {
        Session::flash('errors', 'er is iets mis gegaan');

        return $this->redirect('/');
      }
    }
  }
}
