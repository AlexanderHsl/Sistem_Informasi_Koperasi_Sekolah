<?php
session_start();
require_once __DIR__. '/../../config/database.php';
require_once __DIR__. '/../../validations/auth-validation.php';
require_once __DIR__. '/../../repositories/user-repository.php';

if (isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $request = getLoginRequest($_POST); 
        $errors = validateLogin($request);
        $user = getUserByEmail($request['email']);

        if (!$user || !password_verify($request['password'], $user['password'])) {
                $errors['login'] = 'Email atau password salah';
                }
            if(!empty($errors)) {
                $_SESSION['errors'] = $errors;
                unset($request['password']);
                $_SESSION['old'] = $request;
                header('Location: ../../pages/auth/login.php');
                exit;
            }

            session_regenerate_id(true);
            $_SESSION['user'] = [
                'id' => $user['id'],
                'name'=> $user['name'],
                'email'=> $user['email'],
            ];
            header('Location: ../../index.php');
            exit;

        } catch(PDOException $errors){
            throw $errors;
        }
    }

function requireGuest()
{
    if (isset($_SESSION['user'])) {
        header('Location: /LKS/pages/categories/index.php');
        exit;
    }
}      
function requireLogin()
{
    if (!isset($_SESSION['user'])) {
        header('Location: /LKS/pages/auth/login.php');
        exit;
    }
}