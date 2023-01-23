<?php
class Client extends Controller{
     private $medicamentModel;

     public function __construct()
     {
          $this->medicamentModel = $this->model('medicament');

          }
     public function index(){
          $produit = $this->medicamentModel->getProduit();
          $data = [
              'produit' => $produit,
  
          ];
            $this->view('Client/index',$data);

     }
     public function contact(){
          $data = [
               
  
          ];
            $this->view('Client/contact',$data);

     }

}
