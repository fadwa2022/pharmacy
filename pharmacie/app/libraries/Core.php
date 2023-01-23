<?php
/*
 * app core class
 * creates URL & loads cors controller
 * URL format - /controller/method/params
 */
 class Core {
     //properties
    protected $currentController = 'Client';
    protected $currentMethod = 'index';
    protected $params = [];

     //constructur call the function geturl
    public function __construct(){
      //print_r($this->getUrl());

      $url = $this->getUrl();
    if(isset ($url)){
      // Look in controllers for first value
      if(file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
        // If exists, set as controller
        // ucwords : Met en majuscule la premiere lettre de tous les mots
        $this->currentController = ucwords($url[0]);
        // Unset 0 Index
        // unset Detruit une variable
        unset($url[0]);
      }}

      // Require the controller
      require_once ('../app/controllers/'. $this->currentController . '.php');

      // Instantiate controller class
      $this->currentController = new $this->currentController;
     //check for the second  part of url
      if (isset($url[1]))  {
        // check tosee if method exists in controller
        if(method_exists($this->currentController,$url[1])){
            $this->currentMethod = $url[1];
            unset ($url[1]);
        } 
      }
        // get params
        // array_values:Retourne toutes les valeurs d'un tableau
        // $variable = $condition ? $value_if_true : $value_if_false
        /* li code detailler
if($url) {
    $this->params = array_values($url);
}
else {
    $this->params = [];
} */
        $this->params  = $url ? array_values($url) : [];
    // call a callback with array of params 
    // Appelle une fonction de rappel avec les parametres rassembles en tableau
    // call_user_func_array(callable $callback, array $args): mixed
    call_user_func_array([$this->currentController,$this->currentMethod],$this->params);
      
    }
      public function getUrl(){
        if(isset($_GET['url'])){
                  // rtrim() permet de supprimer des caracteres a la fin d une chaine de caracteres.
          $url = rtrim($_GET['url'], '/');
                  // FILTER_VALIDATE_URL (int)  ID of "validate_url" filter.
          $url = filter_var($url, FILTER_SANITIZE_URL);
                  // explode() retourne un tableau de chaines de caracteres pour separer  une chaine par une autre
          $url = explode('/', $url);
          return $url;
        }
    }

  } 
