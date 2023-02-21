<?php
class AccountUpdate extends Controller
{
  private Account $AccountsUpdate;

  public function __construct()
  {
    $this->AccountsUpdate = $this->model('Account');
  }

  public function index()
  {
    $this->view('AccountPage/update-form', [
      'name' => 'name',
      'email' => 'email',
      'password' => 'password',
      'id' => 1,
    ]);
  }

  public function update()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if ($errors = $this->validate('AccountValidator', $_POST)) {
        Session::flash('errors', $errors);

        return $this->redirect('/');
      }
      try {
        $this->AccountsUpdate->update($_POST);
        Session::flash('message', 'succesvol geupdate');
        return $this->redirect('/');
      } catch (Exception $e) {
        Session::flash('errors', 'er is iets mis gegaan');

        return $this->redirect('/');
      }
    }
  }
}
