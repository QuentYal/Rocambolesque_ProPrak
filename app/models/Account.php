<?php

class Account
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function update($data)
  {
    $this->db->query('UPDATE person SET Firstname = :firstname, Infix = :infix, Lastname = :lastname WHERE id = :id');
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':firstname', $data['firstname']);
    $this->db->bind(':infix', $data['infix']);
    $this->db->bind(':lastname', $data['lastname']);

    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
