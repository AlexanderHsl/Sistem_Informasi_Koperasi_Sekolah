<?php
require_once
  __DIR__ . "/../repositories/user-repository.php";

// Pola: getXxxRequest() membersihkan input, validateXxx() mengembalikan array $errors.

function getRegisterRequest($request)
{
  return [
    'name' => trim(htmlspecialchars($request['name'] ?? '')),
        'email' => trim(htmlspecialchars($request['email'] ?? '')),
        'password' => $request['password'] ?? '',
        'password_confirmation' => $request['password_confirmation'] ?? '',
  ];
}

function validateRegister($request)
{
  $errors = [];
  if($request['name'] === '') {
    $errors['name'] ="Nama lengkap wajib diisi";
  } elseif(mb_strlen($request['name']) > 150){
    $errors['name'] = "Nama lengkap tidak boleh melebihi 150 karakter";
  } 

  if($request['email'] === '') {
    $errors['email'] ="email wajib diisi";
  } elseif(!filter_var($request['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Email yang dikirim tidak valid";
  } elseif(isEmailTaken($request['email'])){
    $errors['email'] = "email sudah di daftarkan sebelumnnya";
  }

  if($request['password'] === '') {
    $errors['password'] ="password wajib diisi";
  } elseif(mb_strlen($request['password']) < 8){
    $errors['password'] = "password tidak boleh kurang dari 8 karakter";
  } 

  if ($request['password_confirmation'] === '') {
        $errors['password_confirmation'] = "Konfirmasi password wajib diisi";
    } elseif ($request['password_confirmation'] !== $request['password']) {
        $errors['password_confirmation'] = "Kata sandi tidak sama";
    }
  return $errors;
}

function getLoginRequest($request)
{
  return [
  'email' => $request['email'],
  'password' => $request['password']
  ];
}

function validateLogin($request)
{
  $errors = [];
  if($request['email'] === ''){
    $errors['email'] = "email wajib diisi";
  }
  if($request['password'] === ''){
    $errors['password'] = "password wajib diisi";
  }
  return $errors;
}

