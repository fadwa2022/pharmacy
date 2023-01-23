<?php
class Users extends Controller
{
  private $userModel;
  public function __construct()
  {
    $this->userModel = $this->model('User');
  }
  public function register()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),
        'email_err' => '',
      ];

      if ($this->userModel->findUserByEmail($data['email'])) {
        $data['email_err'] = 'email is elready taken';
      }
      if (!empty($data['email']) && !empty($data['name']) && !empty($data['password']) && !empty($data['confirm_password']) && empty($data['email_err'])) {

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        if ($this->userModel->register($data)) {

          flash('register_success', 'You are registered and can log in');
          redirect('Users/login');
        } else {
          die('wrong');
        }
      } else {
        $this->view('Users/register', $data);
      }
    } else {
      $data = [
        'name' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'email_err' => '',

      ];
      $this->view('Users/register', $data);
    }
  }
  public function login()
  {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'email_err' => '',
      ];

      if ($this->userModel->findUserByEmail($data['email'])) {
      } else {
        $data['email_err'] = 'no user found';
      }

      if (empty($data['email_err'])) {
        $loggedInUser = $this->userModel->login($data['email'] , $data['password']);

        if ($loggedInUser) {   
          $this->creatUserSession($loggedInUser);
        } else {
          $this->view('Users/login', $data);
        }
      } else {

        $this->view('Users/login', $data);
      }
    } else {
      // init data
      $data = [
        'email' => '',
        'password' => '',

      ];
      // load view
      $this->view('Users/login', $data);
    }
  }
  public function creatUserSession($user)
  {
    $_SESSION['ID_user'] = $user->id;
    $_SESSION['user_email'] = $user->email;
    $_SESSION['user_name'] = $user->nom;
    $_SESSION['role'] = $user->role;

    if ($_SESSION['role'] == 1) {
      redirect('Admin/dashbord');
    } else {
      redirect('Client/index');
    }
  }
  public function logout()
  {
    unset($_SESSION['ID_user']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);
    unset($_SESSION['Role']);
    session_destroy();
    redirect('Client/index');
  }
  public function dashbord()
  {
    $data = [];
    $this->view('Users/dashbord', $data);
  }
  public function tables()
  {
    $data = [];
    $this->view('Users/tables', $data);
  }
}
