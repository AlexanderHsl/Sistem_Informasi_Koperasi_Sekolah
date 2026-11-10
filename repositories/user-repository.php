<?php
require_once __DIR__ . "/../config/database.php";

// Repository = tempat query SELECT. Selalu pakai prepared statement!

function isEmailTaken($email)
{
  global $pdo;
  $query = "select count(id) from users where email = :email";
  $stmt = $pdo->prepare($query);
  $stmt->execute([
    'email' => $email
  ]);
  $iseEmailTaken = $stmt->fetchColumn() > 0;
  return $iseEmailTaken;
}

function getUserByEmail($email)
{
  global $pdo;
  $query = "select * from users where email = :email";
  $stmt = $pdo->prepare($query);
  $stmt->execute([
    'email'=> $email
  ]);
  $user = $stmt->fetch();
  return $user;
}
