<?php

class User
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function updatePassword($password, $id)
  {
    $this->db->query('UPDATE user SET Password = :password WHERE PersonId = :id');

    $this->db->bind(':password', $password);
    $this->db->bind(':id', $id);

    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function updateEmail($email, $id)
  {
    $this->db->query('UPDATE contact SET Email = :email WHERE PersonId = :id');

    $this->db->bind(':email', $email);
    $this->db->bind(':id', $id);

    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function getEmail($id)
  {
    $this->db->query('SELECT Email FROM contact WHERE PersonId = :id');

    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }
}
