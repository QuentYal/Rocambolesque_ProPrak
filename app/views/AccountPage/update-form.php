<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= asset('css/update-form.css') ?>">
  <title>Document</title>
</head>

<body>
  <?php $old = Session::getFlash('old'); ?>
  <?php $errors = Session::getFlash('errors') ?>
  <form class="update-form" action="<?= url("accountupdate/update/{$id}") ?>" method="post">
    <?php if (isset($errors['firstname'])) : ?>
      <div class="alert alert-danger" role="alert">
        <?= $errors['firstname'][0] ?>
      </div>
    <?php endif; ?>
    <input type="text" name="firstname" value="<?= isset($old['firstname']) ? $old['firstname'] : $firstname ?>">

    <?php if (isset($errors['infix'])) : ?>
      <div class="alert alert-danger" role="alert">
        <?= $errors['infix'][0] ?>
      </div>
    <?php endif; ?>
    <input type="text" name="infix" value="<?= isset($old['infix']) ? $old['infix'] : $infix ?>">
    <?php if (isset($errors['lastname'])) : ?>
      <div class="alert alert-danger" role="alert">
        <?= $errors['lastname'][0] ?>
      </div>
    <?php endif; ?>
    <input type="text" name="lastname" value="<?= isset($old['lastname']) ? $old['lastname'] : $lastname ?>">

    <?php if (isset($errors['email'])) : ?>
      <div class="alert alert-danger" role="alert">
        <?= $errors['email'][0] ?>
      </div>
    <?php endif; ?>
    <input type="text" name="email" value="<?= isset($old['email']) ? $old['email'] : $email ?>">

    <?php if (isset($errors['password'])) : ?>
      <div class="alert alert-danger" role="alert">
        <?= $errors['password'][0] ?>
      </div>
    <?php endif; ?>
    <input type="password" name="password">
    <input type="submit" value="Update">
  </form>
</body>

</html>