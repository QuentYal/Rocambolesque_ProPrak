<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="<?= url('accountupdate/update') ?>" method="post">
    <input type="text" name="firstname" value="<?= $name ?>">
    <input type="text" name="infix" value="<?= $name ?>">
    <input type="text" name="lastname" value="<?= $name ?>">
    <input type="text" name="email" value="<?= $email ?>">
    <input type="text" name="password" value="<?= $password ?>">
    <input type="text" name="id" value="<?= $id ?>">
    <input type="submit" value="Update">
  </form>
</body>

</html>