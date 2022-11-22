<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Core\Form;
use App\Models\UsersModel;

class UsersController extends Controller
{
  public function register() { 
    var_dump($_POST);
    if(Form::validate($_POST, ['username', 'email', 'password'])){
      // clean inputs ans hash password
      $username = strip_tags($_POST['username']);
      $email = strip_tags($_POST['email']);
      $password = password_hash($_POST['password'], PASSWORD_ARGON2I);

      //insert data into database
      $user = new UsersModel ;
      $user->setUsername($username)->setEmail($email)->setPassword($password);
      $user->create();
      
    }else{
      echo 'not valide' ;
    }
    $this->render('users/register', [], 'login');
  }
  
  //to do : login by email or username
  public function login() {
    // check form validation
    if(Form::validate($_POST, ['email', 'password'])) {
      // get user from db using email 
      $usersModel = new UsersModel;
      $userArray = $usersModel->findOneByEmail((strip_tags($_POST['email'])));

      // if user do not exist
      if(!$userArray){
      //   // send session alert 
        $_SESSION['error']=['email or password is not correct'] ;
        header('Location: '.URL.'/login');
        exit;
      }
      // user exist
      $user = $usersModel->hydrate($userArray);
      
      if(password_verify($_POST['password'], $user->getPassword())){
        //correct password
        //create session
        $user->setSession();
        header('location: '.URL);
      }else{
        // incorrect password
        $_SESSION['error']=['email or password is not correct'] ;
        header('Location: '.URL.'/login');
        exit;
      }
      
      $_SESSION['user']=$userArray->username;
      header('Location:'. URL);
      


    }
    // var_dump($_SESSION);
    $this->render('users/login', [], 'login');

  }

  public function logout(){
    unset($_SESSION['user']);
    header('location: '.URL);
    exit;
  }

}