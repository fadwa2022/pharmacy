<?php
session_start();
// flash message helper
function flash($name = '', $message = '', $class = 'alert alert-info bg-green-300 rounded-b text-teal-900 px-4 py-3 w-3/4 shadow-md" role="alert'){
    if(!empty($name)){
      if(!empty($message) && empty($_SESSION[$name])){
        if(!empty($_SESSION[$name])){
          unset($_SESSION[$name]);
        }

        if(!empty($_SESSION[$name. '_class'])){
          unset($_SESSION[$name. '_class']);
        }

        $_SESSION[$name] = $message;
        $_SESSION[$name. '_class'] = $class;
      } elseif(empty($message) && !empty($_SESSION[$name])){
        $class = !empty($_SESSION[$name. '_class']) ? $_SESSION[$name. '_class'] : '';
        echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
        unset($_SESSION[$name]);
        unset($_SESSION[$name. '_class']);
      }
    }
  }
  
 function isLoggdIn()
{
    if (isset($_SESSION['ID_user'])) {
        return true;
    } else {
        return false;
    }
}